<?php

class CampaignController extends Controller
{
    public function campaignIndex(Request $request, Response $response)
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
            : ['campaignIdentifyCreatedAt', 'ASC'];

        //  Build unified options array
        $options = [
            'filters'    => $filters,
            'search'     => [
                'term'    => $_GET['search'] ?? '',
                'columns' => ['campaignIdentifyTitle'],
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
        $campaign = $this->model('CampaignModel')->findAll($options);

        if (! is_array($campaign) || ! isset($campaign['data'], $campaign['meta'])) {
            throw new Exception("Invalid response from findAll()");
        }

        //  Return view
        return $this->adminView('campaign/campaignAll', [
            'campaign' => $campaign['data'],
            'meta'         => $campaign['meta'],
        ]);
    }

    public function campaignCreate(Request $request, Response $response)
    {
        return $this->adminView('campaign/campaignNew');
    }

    public function campaignStore(Request $request, Response $response)
    {
        $data = $request->getBody();
        $data['campaignIdentify'] = generateUniqueId();
        // Handle file uploads
        $uploadsDir = '../public/assets/alpha-theme/img/uploads/';
        // Upload for campaignMedia
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
        $filename = uploadFile('campaignMedia', $uploadsDir, $allowedExts, 52428800, true);
        if ($filename) {
            $data['campaignMedia'] = $filename;
        } else {
            echo "Upload failed for campaignMedia!";
        }

        $model = $this->model('CampaignModel');

        $errors = $model->validate($data);

        if (!empty($errors)) {
            return $this->view('campaign/campaignNew', [
                'errors' => $errors,
                'old'    => $data,
            ]);
        }

        $model->create($data);
        return redirect('admin/campaign');
    }

    public function campaignEdit(Request $request, Response $response, $campaignIdentify)
    {
        $record = $this->model('CampaignModel')->find()->where('campaignIdentify', $campaignIdentify)->get();
        if (!$record) return redirect('admin/campaign');
        return $this->adminView('campaign/campaignEdit', ['campaign' => $record[0]]);
    }

    public function campaignUpdate(Request $request, Response $response, $campaignIdentify)
    {
        $model = $this->model('CampaignModel');
        $data  = $request->getBody();
        // Handle file uploads
        $uploadsDir = '../public/assets/alpha-theme/img/uploads/';
        // Upload for campaignMedia
        $allowedExts = ['jpg','jpeg','png','webp','gif','pdf','doc','docx','mp3','mp4'];
        $filename = uploadFile('campaignMedia', $uploadsDir, $allowedExts, 52428800, true);
        if ($filename) {
            $data['campaignMedia'] = $filename;
        } else {
            unset($data['campaignMedia']);
        }

        $errors = $model->validate($data);

        if (!empty($errors)) {
            $data['campaignIdentify'] = $campaignIdentify;
            return $this->adminView('campaign/campaignEdit', [
                'errors'  => $errors,
                'campaign' => (object) $data,
            ]);
        }

        $model->update($data, $campaignIdentify, 'campaignIdentify');
        return redirect('admin/campaign');
    }

    public function campaignShow(Request $request, Response $response, $campaignIdentify)
    {
        $record = $this->model('CampaignModel')->find()->where('campaignIdentify', $campaignIdentify)->get();
        if (!$record) return redirect('admin/campaign');
        return $this->adminView('campaign/campaignSingle', ['campaign' => $record[0]]);
    }

    public function campaignDestroy(Request $request, Response $response, $campaignIdentify)
    {
        $this->model('CampaignModel')->where('campaignIdentify', $campaignIdentify)->delete();
        return redirect('admin/campaign');
    }

    public function campaignTruncate(Request $request, Response $response)
    {
        $model = $this->model('CampaignModel');
        $ids   = $request->getBody()['selectedIds'] ?? [];

        if (! empty($ids)) {
            foreach ($ids as $id) {
                $model->delete($id, 'campaignIdentify');
            }
        } else {
            $model->truncate();
        }

        return redirect('admin/campaign');
    }

    public function campaignExport(Request $request, Response $response)
    {
        $model = $this->model('CampaignModel');
        $records = $model->findAll()->get();
        $model->export($records, 'campaign_export.csv');
    }

    public function campaignImport(Request $request, Response $response)
    {
        try {
            $result = $this->model('CampaignModel')->import($_FILES['file']);
            $_SESSION['success_message'] = "Imported {$result['imported']} records. Skipped: {$result['skipped']}, Failed: {$result['failed']}";
        } catch (Exception $e) {
            $_SESSION['error_message'] = 'Import failed: ' . $e->getMessage();
        }
        return redirect('admin/campaign');
    }
}
