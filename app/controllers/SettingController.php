<?php

class SettingController extends Controller
{
    public function settingIndex(Request $request, Response $response)
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
            : ['settingIdentifyCreatedAt', 'ASC'];

        //  Build unified options array
        $options = [
            'filters'    => $filters,
            'search'     => [
                'term'    => $_GET['search'] ?? '',
                'columns' => ['settingIdentifyTitle'],
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
        $settings = $this->model('SettingModel')->findAll($options);

        if (! is_array($settings) || ! isset($settings['data'], $settings['meta'])) {
            throw new Exception("Invalid response from findAll()");
        }

        //  Return view
        return $this->adminView('settings/settingAll', [
            'settings' => $settings['data'],
            'meta'         => $settings['meta'],
        ]);
    }

    public function settingCreate(Request $request, Response $response)
    {
        return $this->adminView('settings/settingNew');
    }

    public function settingStore(Request $request, Response $response)
    {
        $data = $request->getBody();
        $data['settingIdentify'] = generateUniqueId();
        $model = $this->model('SettingModel');

        $errors = $model->validate($data);

        if (!empty($errors)) {
            return $this->view('settings/settingNew', [
                'errors' => $errors,
                'old'    => $data,
            ]);
        }

        $model->create($data);
        return redirect('admin/settings');
    }

    public function settingEdit(Request $request, Response $response, $settingIdentify)
    {
        $record = $this->model('SettingModel')->find()->where('settingIdentify', $settingIdentify)->get();
        if (!$record) return redirect('admin/settings');
        return $this->adminView('settings/settingEdit', ['setting' => $record[0]]);
    }

    public function settingUpdate(Request $request, Response $response, $settingIdentify)
    {
        $model = $this->model('SettingModel');
        $data  = $request->getBody();
        $errors = $model->validate($data);

        if (!empty($errors)) {
            $data['settingIdentify'] = $settingIdentify;
            return $this->adminView('settings/settingEdit', [
                'errors'  => $errors,
                'setting' => (object) $data,
            ]);
        }

        $model->update($data, $settingIdentify, 'settingIdentify');
        return redirect('admin/settings');
    }

    public function settingShow(Request $request, Response $response, $settingIdentify)
    {
        $record = $this->model('SettingModel')->find()->where('settingIdentify', $settingIdentify)->get();
        if (!$record) return redirect('admin/settings');
        return $this->adminView('settings/settingSingle', ['setting' => $record[0]]);
    }

    public function settingDestroy(Request $request, Response $response, $settingIdentify)
    {
        $this->model('SettingModel')->where('settingIdentify', $settingIdentify)->delete();
        return redirect('admin/settings');
    }

    public function settingTruncate(Request $request, Response $response)
    {
        $model = $this->model('SettingModel');
        $ids   = $request->getBody()['selectedIds'] ?? [];

        if (! empty($ids)) {
            foreach ($ids as $id) {
                $model->delete($id, 'settingIdentify');
            }
        } else {
            $model->truncate();
        }

        return redirect('admin/settings');
    }

    public function settingExport(Request $request, Response $response)
    {
        $model = $this->model('SettingModel');
        $records = $model->findAll()->get();
        $model->export($records, 'settings_export.csv');
    }

    public function settingImport(Request $request, Response $response)
    {
        try {
            $result = $this->model('SettingModel')->import($_FILES['file']);
            $_SESSION['success_message'] = "Imported {$result['imported']} records. Skipped: {$result['skipped']}, Failed: {$result['failed']}";
        } catch (Exception $e) {
            $_SESSION['error_message'] = 'Import failed: ' . $e->getMessage();
        }
        return redirect('admin/settings');
    }
}
