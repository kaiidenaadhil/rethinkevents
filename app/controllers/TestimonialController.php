<?php

class TestimonialController extends Controller
{
    public function testimonialIndex(Request $request, Response $response)
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
            : ['testimonialIdentifyCreatedAt', 'ASC'];

        //  Build unified options array
        $options = [
            'filters'    => $filters,
            'search'     => [
                'term'    => $_GET['search'] ?? '',
                'columns' => ['testimonialIdentifyTitle'],
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
        $testimonials = $this->model('TestimonialModel')->findAll($options);

        if (! is_array($testimonials) || ! isset($testimonials['data'], $testimonials['meta'])) {
            throw new Exception("Invalid response from findAll()");
        }

        //  Return view
        return $this->adminView('testimonials/testimonialAll', [
            'testimonials' => $testimonials['data'],
            'meta'         => $testimonials['meta'],
        ]);
    }

    public function testimonialCreate(Request $request, Response $response)
    {
        return $this->adminView('testimonials/testimonialNew');
    }

    public function testimonialStore(Request $request, Response $response)
    {
        $data = $request->getBody();
        $data['testimonialIdentify'] = generateUniqueId();
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

        $model = $this->model('TestimonialModel');

        $errors = $model->validate($data);

        if (!empty($errors)) {
            return $this->view('testimonials/testimonialNew', [
                'errors' => $errors,
                'old'    => $data,
            ]);
        }

        $model->create($data);
        return redirect('admin/testimonials');
    }

    public function testimonialEdit(Request $request, Response $response, $testimonialIdentify)
    {
        $record = $this->model('TestimonialModel')->find()->where('testimonialIdentify', $testimonialIdentify)->get();
        if (!$record) return redirect('admin/testimonials');
        return $this->adminView('testimonials/testimonialEdit', ['testimonial' => $record[0]]);
    }

    public function testimonialUpdate(Request $request, Response $response, $testimonialIdentify)
    {
        $model = $this->model('TestimonialModel');
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
            $data['testimonialIdentify'] = $testimonialIdentify;
            return $this->adminView('testimonials/testimonialEdit', [
                'errors'  => $errors,
                'testimonial' => (object) $data,
            ]);
        }

        $model->update($data, $testimonialIdentify, 'testimonialIdentify');
        return redirect('admin/testimonials');
    }

    public function testimonialShow(Request $request, Response $response, $testimonialIdentify)
    {
        $record = $this->model('TestimonialModel')->find()->where('testimonialIdentify', $testimonialIdentify)->get();
        if (!$record) return redirect('admin/testimonials');
        return $this->adminView('testimonials/testimonialSingle', ['testimonial' => $record[0]]);
    }

    public function testimonialDestroy(Request $request, Response $response, $testimonialIdentify)
    {
        $this->model('TestimonialModel')->where('testimonialIdentify', $testimonialIdentify)->delete();
        return redirect('admin/testimonials');
    }

    public function testimonialTruncate(Request $request, Response $response)
    {
        $model = $this->model('TestimonialModel');
        $ids   = $request->getBody()['selectedIds'] ?? [];

        if (! empty($ids)) {
            foreach ($ids as $id) {
                $model->delete($id, 'testimonialIdentify');
            }
        } else {
            $model->truncate();
        }

        return redirect('admin/testimonials');
    }

    public function testimonialExport(Request $request, Response $response)
    {
        $model = $this->model('TestimonialModel');
        $records = $model->findAll()->get();
        $model->export($records, 'testimonials_export.csv');
    }

    public function testimonialImport(Request $request, Response $response)
    {
        try {
            $result = $this->model('TestimonialModel')->import($_FILES['file']);
            $_SESSION['success_message'] = "Imported {$result['imported']} records. Skipped: {$result['skipped']}, Failed: {$result['failed']}";
        } catch (Exception $e) {
            $_SESSION['error_message'] = 'Import failed: ' . $e->getMessage();
        }
        return redirect('admin/testimonials');
    }
}
