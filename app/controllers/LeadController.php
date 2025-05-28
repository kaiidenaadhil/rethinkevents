<?php

class LeadController extends Controller
{

    public function contactUs(Request $request, Response $response)
    {
        $data = $request->getBody();
        $data['leadIdentify'] = generateUniqueId();
        $model = $this->model('LeadModel');

        $errors = $model->validate($data);

        if (!empty($errors)) {
            return $this->view('contact-us', [
                'errors' => $errors,
                'old'    => $data,
            ]);
        }

        $lead = $model->create($data);
        if($lead){
            App::$session->set('success', 'Your message has been sent successfully!');
            return redirect('contact-us/');
        }
        
    }
    public function leadIndex(Request $request, Response $response)
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
            : ['leadIdentifyCreatedAt', 'ASC'];

        //  Build unified options array
        $options = [
            'filters'    => $filters,
            'search'     => [
                'term'    => $_GET['search'] ?? '',
                'columns' => ['leadIdentifyTitle'],
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
        $leads = $this->model('LeadModel')->findAll($options);

        if (! is_array($leads) || ! isset($leads['data'], $leads['meta'])) {
            throw new Exception("Invalid response from findAll()");
        }

        //  Return view
        return $this->adminView('leads/leadAll', [
            'leads' => $leads['data'],
            'meta'         => $leads['meta'],
        ]);
    }

    public function leadCreate(Request $request, Response $response)
    {
        return $this->adminView('leads/leadNew');
    }

    public function leadStore(Request $request, Response $response)
    {
        $data = $request->getBody();
        $data['leadIdentify'] = generateUniqueId();
        $model = $this->model('LeadModel');

        $errors = $model->validate($data);

        if (!empty($errors)) {
            return $this->view('leads/leadNew', [
                'errors' => $errors,
                'old'    => $data,
            ]);
        }

        $model->create($data);
        return redirect('admin/leads');
    }

    public function leadEdit(Request $request, Response $response, $leadIdentify)
    {
        $record = $this->model('LeadModel')->find()->where('leadIdentify', $leadIdentify)->get();
        if (!$record) return redirect('admin/leads');
        return $this->adminView('leads/leadEdit', ['lead' => $record[0]]);
    }

    public function leadUpdate(Request $request, Response $response, $leadIdentify)
    {
        $model = $this->model('LeadModel');
        $data  = $request->getBody();
        $errors = $model->validate($data);

        if (!empty($errors)) {
            $data['leadIdentify'] = $leadIdentify;
            return $this->adminView('leads/leadEdit', [
                'errors'  => $errors,
                'lead' => (object) $data,
            ]);
        }

        $model->update($data, $leadIdentify, 'leadIdentify');
        return redirect('admin/leads');
    }

    public function leadShow(Request $request, Response $response, $leadIdentify)
    {
        $record = $this->model('LeadModel')->find()->where('leadIdentify', $leadIdentify)->get();
        if (!$record) return redirect('admin/leads');
        return $this->adminView('leads/leadSingle', ['lead' => $record[0]]);
    }

    public function leadDestroy(Request $request, Response $response, $leadIdentify)
    {
        $this->model('LeadModel')->where('leadIdentify', $leadIdentify)->delete();
        return redirect('admin/leads');
    }

    public function leadTruncate(Request $request, Response $response)
    {
        $model = $this->model('LeadModel');
        $ids   = $request->getBody()['selectedIds'] ?? [];

        if (! empty($ids)) {
            foreach ($ids as $id) {
                $model->delete($id, 'leadIdentify');
            }
        } else {
            $model->truncate();
        }

        return redirect('admin/leads');
    }

    public function leadExport(Request $request, Response $response)
    {
        $model = $this->model('LeadModel');
        $records = $model->findAll()->get();
        $model->export($records, 'leads_export.csv');
    }

    public function leadImport(Request $request, Response $response)
    {
        try {
            $result = $this->model('LeadModel')->import($_FILES['file']);
            $_SESSION['success_message'] = "Imported {$result['imported']} records. Skipped: {$result['skipped']}, Failed: {$result['failed']}";
        } catch (Exception $e) {
            $_SESSION['error_message'] = 'Import failed: ' . $e->getMessage();
        }
        return redirect('admin/leads');
    }
}
