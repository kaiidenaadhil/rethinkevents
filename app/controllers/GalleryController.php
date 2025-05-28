<?php

class GalleryController extends Controller
{

public function index()
    {
        $galleries = $this->model('GalleryModel')->all();
        return $this->view('gallery', [
            'galleries' => $galleries
        ]);
    }
    public function galleryIndex(Request $request, Response $response)
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
            : ['galleryIdentifyCreatedAt', 'ASC'];

        //  Build unified options array
        $options = [
            'filters'    => $filters,
            'search'     => [
                'term'    => $_GET['search'] ?? '',
                'columns' => ['galleryIdentifyTitle'],
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
        $galleries = $this->model('GalleryModel')->findAll($options);

        if (! is_array($galleries) || ! isset($galleries['data'], $galleries['meta'])) {
            throw new Exception("Invalid response from findAll()");
        }

        //  Return view
        return $this->adminView('galleries/galleryAll', [
            'galleries' => $galleries['data'],
            'meta'         => $galleries['meta'],
        ]);
    }

public function galleryCreate(Request $request, Response $response)
{
    $EventModel = $this->model('EventModel');

    // Fetch all events
    $events = $EventModel->all();

    // Pass events to the view
    return $this->adminView('galleries/galleryNew', [
        'events' => $events
    ]);
}


    public function galleryStore(Request $request, Response $response)
    {
        $data = $request->getBody();
        $data['galleryIdentify'] = generateUniqueId();
        // Handle file uploads
        $uploadsDir = '../public/assets/alpha-theme/img/uploads/';
        // Upload for galleryMedia
        $allowedExts = array (
  0 => 'jpg',
  1 => 'jpeg',
  2 => 'png',
  3 => 'webp',
  4 => 'gif',
  5 => 'pdf',
  6 => 'doc',
  7 => 'docx',
  8 => 'mp3',
  9 => 'mp4',
);
        $filename = uploadFile('galleryMedia', $uploadsDir, $allowedExts, 52428800, true);
        if ($filename) {
            $data['galleryMedia'] = $filename;
        } else {
            echo "Upload failed for galleryMedia!";
        }

        $model = $this->model('GalleryModel');

        $errors = $model->validate($data);

        if (!empty($errors)) {
            return $this->view('galleries/galleryNew', [
                'errors' => $errors,
                'old'    => $data,
            ]);
        }

        $model->create($data);
        return redirect('admin/galleries');
    }

    public function galleryEdit(Request $request, Response $response, $galleryIdentify)
    {
        $record = $this->model('GalleryModel')->find()->where('galleryIdentify', $galleryIdentify)->get();
        if (!$record) return redirect('admin/galleries');
        return $this->adminView('galleries/galleryEdit', ['gallery' => $record[0]]);
    }

    public function galleryUpdate(Request $request, Response $response, $galleryIdentify)
    {
        $model = $this->model('GalleryModel');
        $data  = $request->getBody();
        // Handle file uploads
        $uploadsDir = '../public/assets/alpha-theme/img/uploads/';
        // Upload for galleryMedia
        $allowedExts = ['jpg','jpeg','png','webp','gif','pdf','doc','docx','mp3','mp4'];
        $filename = uploadFile('galleryMedia', $uploadsDir, $allowedExts, 52428800, true);
        if ($filename) {
            $data['galleryMedia'] = $filename;
        } else {
            unset($data['galleryMedia']);
        }

        $errors = $model->validate($data);

        if (!empty($errors)) {
            $data['galleryIdentify'] = $galleryIdentify;
            return $this->adminView('galleries/galleryEdit', [
                'errors'  => $errors,
                'gallery' => (object) $data,
            ]);
        }

        $model->update($data, $galleryIdentify, 'galleryIdentify');
        return redirect('admin/galleries');
    }

    public function galleryShow(Request $request, Response $response, $galleryIdentify)
    {
        $record = $this->model('GalleryModel')->find()->where('galleryIdentify', $galleryIdentify)->get();
        if (!$record) return redirect('admin/galleries');
        return $this->adminView('galleries/gallerySingle', ['gallery' => $record[0]]);
    }

    public function galleryDestroy(Request $request, Response $response, $galleryIdentify)
    {
        $this->model('GalleryModel')->where('galleryIdentify', $galleryIdentify)->delete();
        return redirect('admin/galleries');
    }

    public function galleryTruncate(Request $request, Response $response)
    {
        $model = $this->model('GalleryModel');
        $ids   = $request->getBody()['selectedIds'] ?? [];

        if (! empty($ids)) {
            foreach ($ids as $id) {
                $model->delete($id, 'galleryIdentify');
            }
        } else {
            $model->truncate();
        }

        return redirect('admin/galleries');
    }

    public function galleryExport(Request $request, Response $response)
    {
        $model = $this->model('GalleryModel');
        $records = $model->findAll()->get();
        $model->export($records, 'galleries_export.csv');
    }

    public function galleryImport(Request $request, Response $response)
    {
        try {
            $result = $this->model('GalleryModel')->import($_FILES['file']);
            $_SESSION['success_message'] = "Imported {$result['imported']} records. Skipped: {$result['skipped']}, Failed: {$result['failed']}";
        } catch (Exception $e) {
            $_SESSION['error_message'] = 'Import failed: ' . $e->getMessage();
        }
        return redirect('admin/galleries');
    }
}
