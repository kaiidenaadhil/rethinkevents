<?php

class ClientController extends Controller
{
    public function index(Request $request, Response $response){
        $clients = $this->model('ClientModel')->all();
        return $this->view('client',[
            'clients' => $clients
        ]);
    }

    public function clientIndex(Request $request, Response $response)
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
            : ['clientIdentifyCreatedAt', 'ASC'];

        //  Build unified options array
        $options = [
            'filters'    => $filters,
            'search'     => [
                'term'    => $_GET['search'] ?? '',
                'columns' => ['clientIdentifyTitle'],
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
        $clients = $this->model('ClientModel')->findAll($options);

        if (! is_array($clients) || ! isset($clients['data'], $clients['meta'])) {
            throw new Exception("Invalid response from findAll()");
        }

        //  Return view
        return $this->adminView('clients/clientAll', [
            'clients' => $clients['data'],
            'meta'         => $clients['meta'],
        ]);
    }

    public function clientCreate(Request $request, Response $response)
    {
        return $this->adminView('clients/clientNew');
    }

    public function clientStore(Request $request, Response $response)
    {
        $data = $request->getBody();
        $data['clientIdentify'] = generateUniqueId();
        // Handle file uploads
        $uploadsDir = '../public/assets/alpha-theme/img/uploads/';
        // Upload for clientImage
        $allowedExts = array (
  0 => 'jpg',
  1 => 'png',
);
        $filename = uploadFile('clientImage', $uploadsDir, $allowedExts, 52428800, true);
        if ($filename) {
            $data['clientImage'] = $filename;
        } else {
            echo "Upload failed for clientImage!";
        }

        $model = $this->model('ClientModel');

        $errors = $model->validate($data);

        if (!empty($errors)) {
            return $this->view('clients/clientNew', [
                'errors' => $errors,
                'old'    => $data,
            ]);
        }

        $model->create($data);
        return redirect('admin/clients');
    }

    public function clientEdit(Request $request, Response $response, $clientIdentify)
    {
        $record = $this->model('ClientModel')->find()->where('clientIdentify', $clientIdentify)->get();
        if (!$record) return redirect('admin/clients');
        return $this->adminView('clients/clientEdit', ['client' => $record[0]]);
    }

    public function clientUpdate(Request $request, Response $response, $clientIdentify)
    {
        $model = $this->model('ClientModel');
        $data  = $request->getBody();
        // Handle file uploads
        $uploadsDir = '../public/assets/alpha-theme/img/uploads/';
        // Upload for clientImage
        $allowedExts = ['jpg','png'];
        $filename = uploadFile('clientImage', $uploadsDir, $allowedExts, 52428800, true);
        if ($filename) {
            $data['clientImage'] = $filename;
        } else {
            unset($data['clientImage']);
        }

        $errors = $model->validate($data);

        if (!empty($errors)) {
            $data['clientIdentify'] = $clientIdentify;
            return $this->adminView('clients/clientEdit', [
                'errors'  => $errors,
                'client' => (object) $data,
            ]);
        }

        $model->update($data, $clientIdentify, 'clientIdentify');
        return redirect('admin/clients');
    }

    public function clientShow(Request $request, Response $response, $clientIdentify)
    {
        $record = $this->model('ClientModel')->find()->where('clientIdentify', $clientIdentify)->get();
        if (!$record) return redirect('admin/clients');
        return $this->adminView('clients/clientSingle', ['client' => $record[0]]);
    }

    public function clientDestroy(Request $request, Response $response, $clientIdentify)
    {
        $this->model('ClientModel')->where('clientIdentify', $clientIdentify)->delete();
        return redirect('admin/clients');
    }

    public function clientTruncate(Request $request, Response $response)
    {
        $model = $this->model('ClientModel');
        $ids   = $request->getBody()['selectedIds'] ?? [];

        if (! empty($ids)) {
            foreach ($ids as $id) {
                $model->delete($id, 'clientIdentify');
            }
        } else {
            $model->truncate();
        }

        return redirect('admin/clients');
    }

    public function clientExport(Request $request, Response $response)
    {
        $model = $this->model('ClientModel');
        $records = $model->findAll()->get();
        $model->export($records, 'clients_export.csv');
    }

    public function clientImport(Request $request, Response $response)
    {
        try {
            $result = $this->model('ClientModel')->import($_FILES['file']);
            $_SESSION['success_message'] = "Imported {$result['imported']} records. Skipped: {$result['skipped']}, Failed: {$result['failed']}";
        } catch (Exception $e) {
            $_SESSION['error_message'] = 'Import failed: ' . $e->getMessage();
        }
        return redirect('admin/clients');
    }
}
