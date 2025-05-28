<?php

class ServiceController extends Controller
{
    public function serviceIndex(Request $request, Response $response)
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
            : ['serviceIdentifyCreatedAt', 'ASC'];

        //  Build unified options array
        $options = [
            'filters'    => $filters,
            'search'     => [
                'term'    => $_GET['search'] ?? '',
                'columns' => ['serviceIdentifyTitle'],
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
        $services = $this->model('ServiceModel')->findAll($options);

        if (! is_array($services) || ! isset($services['data'], $services['meta'])) {
            throw new Exception("Invalid response from findAll()");
        }

        //  Return view
        return $this->adminView('services/serviceAll', [
            'services' => $services['data'],
            'meta'         => $services['meta'],
        ]);
    }

    public function serviceCreate(Request $request, Response $response)
    {
        return $this->adminView('services/serviceNew');
    }

    public function serviceStore(Request $request, Response $response)
    {
        $data = $request->getBody();
        $data['serviceIdentify'] = generateUniqueId();
        // Handle file uploads
        $uploadsDir = '../public/assets/alpha-theme/img/uploads/';
        // Upload for serviceImage
        $allowedExts = array (
  0 => 'jpg',
  1 => 'png',
);
        $filename = uploadFile('serviceImage', $uploadsDir, $allowedExts, 52428800, true);
        if ($filename) {
            $data['serviceImage'] = $filename;
        } else {
            echo "Upload failed for serviceImage!";
        }

        $model = $this->model('ServiceModel');

        $errors = $model->validate($data);

        if (!empty($errors)) {
            return $this->view('services/serviceNew', [
                'errors' => $errors,
                'old'    => $data,
            ]);
        }

        $model->create($data);
        return redirect('admin/services');
    }

    public function serviceEdit(Request $request, Response $response, $serviceIdentify)
    {
        $record = $this->model('ServiceModel')->find()->where('serviceIdentify', $serviceIdentify)->get();
        if (!$record) return redirect('admin/services');
        return $this->adminView('services/serviceEdit', ['service' => $record[0]]);
    }

    public function serviceUpdate(Request $request, Response $response, $serviceIdentify)
    {
        $model = $this->model('ServiceModel');
        $data  = $request->getBody();
        // Handle file uploads
        $uploadsDir = '../public/assets/alpha-theme/img/uploads/';
        // Upload for serviceImage
        $allowedExts = ['jpg','png'];
        $filename = uploadFile('serviceImage', $uploadsDir, $allowedExts, 52428800, true);
        if ($filename) {
            $data['serviceImage'] = $filename;
        } else {
            unset($data['serviceImage']);
        }

        $errors = $model->validate($data);

        if (!empty($errors)) {
            $data['serviceIdentify'] = $serviceIdentify;
            return $this->adminView('services/serviceEdit', [
                'errors'  => $errors,
                'service' => (object) $data,
            ]);
        }

        $model->update($data, $serviceIdentify, 'serviceIdentify');
        return redirect('admin/services');
    }

    public function serviceShow(Request $request, Response $response, $serviceIdentify)
    {
        $record = $this->model('ServiceModel')->find()->where('serviceIdentify', $serviceIdentify)->get();
        if (!$record) return redirect('admin/services');
        return $this->adminView('services/serviceSingle', ['service' => $record[0]]);
    }

    public function serviceDestroy(Request $request, Response $response, $serviceIdentify)
    {
        $this->model('ServiceModel')->where('serviceIdentify', $serviceIdentify)->delete();
        return redirect('admin/services');
    }

    public function serviceTruncate(Request $request, Response $response)
    {
        $model = $this->model('ServiceModel');
        $ids   = $request->getBody()['selectedIds'] ?? [];

        if (! empty($ids)) {
            foreach ($ids as $id) {
                $model->delete($id, 'serviceIdentify');
            }
        } else {
            $model->truncate();
        }

        return redirect('admin/services');
    }

    public function serviceExport(Request $request, Response $response)
    {
        $model = $this->model('ServiceModel');
        $records = $model->findAll()->get();
        $model->export($records, 'services_export.csv');
    }

    public function serviceImport(Request $request, Response $response)
    {
        try {
            $result = $this->model('ServiceModel')->import($_FILES['file']);
            $_SESSION['success_message'] = "Imported {$result['imported']} records. Skipped: {$result['skipped']}, Failed: {$result['failed']}";
        } catch (Exception $e) {
            $_SESSION['error_message'] = 'Import failed: ' . $e->getMessage();
        }
        return redirect('admin/services');
    }
}
