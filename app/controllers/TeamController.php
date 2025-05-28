<?php

class TeamController extends Controller
{
    public function teamIndex(Request $request, Response $response)
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
            : ['teamIdentifyCreatedAt', 'ASC'];

        //  Build unified options array
        $options = [
            'filters'    => $filters,
            'search'     => [
                'term'    => $_GET['search'] ?? '',
                'columns' => ['teamIdentifyTitle'],
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
        $teams = $this->model('TeamModel')->findAll($options);

        if (! is_array($teams) || ! isset($teams['data'], $teams['meta'])) {
            throw new Exception("Invalid response from findAll()");
        }

        //  Return view
        return $this->adminView('teams/teamAll', [
            'teams' => $teams['data'],
            'meta'         => $teams['meta'],
        ]);
    }

    public function teamCreate(Request $request, Response $response)
    {
        return $this->adminView('teams/teamNew');
    }

    public function teamStore(Request $request, Response $response)
    {
        $data = $request->getBody();
        $data['teamIdentify'] = generateUniqueId();
        // Handle file uploads
        $uploadsDir = '../public/assets/alpha-theme/img/uploads/';
        // Upload for profileImage
        $allowedExts = array (
  0 => 'jpg',
  1 => 'png',
);
        $filename = uploadFile('profileImage', $uploadsDir, $allowedExts, 52428800, true);
        if ($filename) {
            $data['profileImage'] = $filename;
        } else {
            echo "Upload failed for profileImage!";
        }

        $model = $this->model('TeamModel');

        $errors = $model->validate($data);

        if (!empty($errors)) {
            return $this->view('teams/teamNew', [
                'errors' => $errors,
                'old'    => $data,
            ]);
        }

        $model->create($data);
        return redirect('admin/teams');
    }

    public function teamEdit(Request $request, Response $response, $teamIdentify)
    {
        $record = $this->model('TeamModel')->find()->where('teamIdentify', $teamIdentify)->get();
        if (!$record) return redirect('admin/teams');
        return $this->adminView('teams/teamEdit', ['team' => $record[0]]);
    }

    public function teamUpdate(Request $request, Response $response, $teamIdentify)
    {
        $model = $this->model('TeamModel');
        $data  = $request->getBody();
        // Handle file uploads
        $uploadsDir = '../public/assets/alpha-theme/img/uploads/';
        // Upload for profileImage
        $allowedExts = ['jpg','png'];
        $filename = uploadFile('profileImage', $uploadsDir, $allowedExts, 52428800, true);
        if ($filename) {
            $data['profileImage'] = $filename;
        } else {
            unset($data['profileImage']);
        }

        $errors = $model->validate($data);

        if (!empty($errors)) {
            $data['teamIdentify'] = $teamIdentify;
            return $this->adminView('teams/teamEdit', [
                'errors'  => $errors,
                'team' => (object) $data,
            ]);
        }

        $model->update($data, $teamIdentify, 'teamIdentify');
        return redirect('admin/teams');
    }

    public function teamShow(Request $request, Response $response, $teamIdentify)
    {
        $record = $this->model('TeamModel')->find()->where('teamIdentify', $teamIdentify)->get();
        if (!$record) return redirect('admin/teams');
        return $this->adminView('teams/teamSingle', ['team' => $record[0]]);
    }

    public function teamDestroy(Request $request, Response $response, $teamIdentify)
    {
        $this->model('TeamModel')->where('teamIdentify', $teamIdentify)->delete();
        return redirect('admin/teams');
    }

    public function teamTruncate(Request $request, Response $response)
    {
        $model = $this->model('TeamModel');
        $ids   = $request->getBody()['selectedIds'] ?? [];

        if (! empty($ids)) {
            foreach ($ids as $id) {
                $model->delete($id, 'teamIdentify');
            }
        } else {
            $model->truncate();
        }

        return redirect('admin/teams');
    }

    public function teamExport(Request $request, Response $response)
    {
        $model = $this->model('TeamModel');
        $records = $model->findAll()->get();
        $model->export($records, 'teams_export.csv');
    }

    public function teamImport(Request $request, Response $response)
    {
        try {
            $result = $this->model('TeamModel')->import($_FILES['file']);
            $_SESSION['success_message'] = "Imported {$result['imported']} records. Skipped: {$result['skipped']}, Failed: {$result['failed']}";
        } catch (Exception $e) {
            $_SESSION['error_message'] = 'Import failed: ' . $e->getMessage();
        }
        return redirect('admin/teams');
    }
}
