<?php

class EventController extends Controller
{ 
    public function index(Request $request, Response $response){
        $events = $this->model('EventModel')->all();
        return $this->view('past-events',[
            'events' => $events
        ]);
    }
public function show(Request $request, $eventIdentify)
{
    $EventModel = $this->model('EventModel');

    // Retrieve event by its unique identifier
    $eventRecord = $EventModel->find()->where('eventIdentify', $eventIdentify)->first();

    if (!$eventRecord) {
        echo "event not found";
    }
    // Use the primary key to fetch the full event model (if necessary)
    $event = $EventModel->find($eventRecord->eventId);

    // Get related galleries using the hasMany relationship
    $galleries = $event->galleries();
   // p($galleries);
        return $this->view('eventSingle', [
        'event' => $event,
        'galleries' => $galleries
    ]);
}


    public function eventIndex(Request $request, Response $response)
    {
        //  Extract filters from $_GET like ?filter_status=active
        $filters = [];
        foreach ($_GET as $key => $value) {
            if (strpos($key, 'filter_') === 0 && $value !== '') {
                $filters[substr($key, 7)] = $value;
            }
        }

        //  Extract sort from $_GET like ?sort_title=desc
        $sorts = [];
        foreach ($_GET as $key => $value) {
            if (strpos($key, 'sort_') === 0 && in_array(strtolower($value), ['asc', 'desc'])) {
                $sorts[substr($key, 5)] = strtoupper($value);
            }
        }

        //  Use first sort column or fallback
        [$sortColumn, $sortDirection] = ! empty($sorts)
            ? [array_key_first($sorts), $sorts[array_key_first($sorts)]]
            : ['eventIdentifyCreatedAt', 'ASC'];

        //  Build unified options array
        $options = [
            'filters'    => $filters,
            'search'     => [
                'term'    => $_GET['search'] ?? '',
                'columns' => ['eventIdentifyTitle'],
            ],
            'pagination' => [
                'enabled' => true,
                'page'    => $_GET['page'] ?? 1,
                'perPage' => $_GET['perPage'] ?? 10,
            ],
            'sort'       => [
                'column'    => $sortColumn,
                'direction' => $sortDirection,
            ],
        ];

        //  Fetch from model
        $events = $this->model('EventModel')->findAll($options);

        if (! is_array($events) || ! isset($events['data'], $events['meta'])) {
            throw new Exception("Invalid response from findAll()");
        }

        //  Return view
        return $this->adminView('events/eventAll', [
            'events' => $events['data'],
            'meta'         => $events['meta'],
        ]);
    }

    public function eventCreate(Request $request, Response $response)
    {
        return $this->adminView('events/eventNew');
    }

    public function eventStore(Request $request, Response $response)
    {
        $data = $request->getBody();
        $data['eventIdentify'] = generateUniqueId();
        // Handle file uploads
        $uploadsDir = '../public/assets/alpha-theme/img/uploads/';
        // Upload for eventFeatureImage
        $allowedExts = array (
  0 => 'jpg',
  1 => 'png',
  2 => 'gif',
  3 => 'mp4',
);
        $filename = uploadFile('eventFeatureImage', $uploadsDir, $allowedExts, 52428800, true);
        if ($filename) {
            $data['eventFeatureImage'] = $filename;
        } else {
            echo "Upload failed for eventFeatureImage!";
        }

        $model = $this->model('EventModel');

        $errors = $model->validate($data);

        if (!empty($errors)) {
            return $this->view('events/eventNew', [
                'errors' => $errors,
                'old'    => $data,
            ]);
        }

        $model->create($data);
        return redirect('admin/events');
    }

    public function eventEdit(Request $request, Response $response, $eventIdentify)
    {
        $record = $this->model('EventModel')->find()->where('eventIdentify', $eventIdentify)->get();
        if (!$record) return redirect('admin/events');
        return $this->adminView('events/eventEdit', ['event' => $record[0]]);
    }

    public function eventUpdate(Request $request, Response $response, $eventIdentify)
    {
        $model = $this->model('EventModel');
        $data  = $request->getBody();
        // Handle file uploads
        $uploadsDir = '../public/assets/alpha-theme/img/uploads/';
        // Upload for eventFeatureImage
        $allowedExts = ['jpg','png','gif','mp4'];
        $filename = uploadFile('eventFeatureImage', $uploadsDir, $allowedExts, 52428800, true);
        if ($filename) {
            $data['eventFeatureImage'] = $filename;
        } else {
            unset($data['eventFeatureImage']);
        }

        $errors = $model->validate($data);

        if (!empty($errors)) {
            $data['eventIdentify'] = $eventIdentify;
            return $this->adminView('events/eventEdit', [
                'errors'  => $errors,
                'event' => (object) $data,
            ]);
        }

        $model->update($data, $eventIdentify, 'eventIdentify');
        return redirect('admin/events');
    }

    public function eventShow(Request $request, Response $response, $eventIdentify)
    {
        $record = $this->model('EventModel')->find()->where('eventIdentify', $eventIdentify)->get();
        if (!$record) return redirect('admin/events');
        return $this->adminView('events/eventSingle', ['event' => $record[0]]);
    }

    public function eventDestroy(Request $request, Response $response, $eventIdentify)
    {
        $this->model('EventModel')->where('eventIdentify', $eventIdentify)->delete();
        return redirect('admin/events');
    }

    public function eventTruncate(Request $request, Response $response)
    {
        $model = $this->model('EventModel');
        $ids   = $request->getBody()['selectedIds'] ?? [];

        if (! empty($ids)) {
            foreach ($ids as $id) {
                $model->delete($id, 'eventIdentify');
            }
        } else {
            $model->truncate();
        }

        return redirect('admin/events');
    }

    public function eventExport(Request $request, Response $response)
    {
        $model = $this->model('EventModel');
        $records = $model->findAll()->get();
        $model->export($records, 'events_export.csv');
    }

    public function eventImport(Request $request, Response $response)
    {
        try {
            $result = $this->model('EventModel')->import($_FILES['file']);
            $_SESSION['success_message'] = "Imported {$result['imported']} records. Skipped: {$result['skipped']}, Failed: {$result['failed']}";
        } catch (Exception $e) {
            $_SESSION['error_message'] = 'Import failed: ' . $e->getMessage();
        }
        return redirect('admin/events');
    }
}
