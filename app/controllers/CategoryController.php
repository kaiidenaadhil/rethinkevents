<?php

class CategoryController extends Controller
{
    public function categoryIndex(Request $request, Response $response)
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
            : ['categoryIdentifyCreatedAt', 'ASC'];

        //  Build unified options array
        $options = [
            'filters'    => $filters,
            'search'     => [
                'term'    => $_GET['search'] ?? '',
                'columns' => ['categoryIdentifyTitle'],
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
        $categories = $this->model('CategoryModel')->findAll($options);

        if (! is_array($categories) || ! isset($categories['data'], $categories['meta'])) {
            throw new Exception("Invalid response from findAll()");
        }

        //  Return view
        return $this->adminView('categories/categoryAll', [
            'categories' => $categories['data'],
            'meta'         => $categories['meta'],
        ]);
    }

    public function categoryCreate(Request $request, Response $response)
    {
        return $this->adminView('categories/categoryNew');
    }

    public function categoryStore(Request $request, Response $response)
    {
        $data = $request->getBody();
        $data['categoryIdentify'] = generateUniqueId();
        $model = $this->model('CategoryModel');

        $errors = $model->validate($data);

        if (!empty($errors)) {
            return $this->view('categories/categoryNew', [
                'errors' => $errors,
                'old'    => $data,
            ]);
        }

        $model->create($data);
        return redirect('admin/categories');
    }

    public function categoryEdit(Request $request, Response $response, $categoryIdentify)
    {
        $record = $this->model('CategoryModel')->find()->where('categoryIdentify', $categoryIdentify)->get();
        if (!$record) return redirect('admin/categories');
        return $this->adminView('categories/categoryEdit', ['category' => $record[0]]);
    }

    public function categoryUpdate(Request $request, Response $response, $categoryIdentify)
    {
        $model = $this->model('CategoryModel');
        $data  = $request->getBody();
        $errors = $model->validate($data);

        if (!empty($errors)) {
            $data['categoryIdentify'] = $categoryIdentify;
            return $this->adminView('categories/categoryEdit', [
                'errors'  => $errors,
                'category' => (object) $data,
            ]);
        }

        $model->update($data, $categoryIdentify, 'categoryIdentify');
        return redirect('admin/categories');
    }

    public function categoryShow(Request $request, Response $response, $categoryIdentify)
    {
        $record = $this->model('CategoryModel')->find()->where('categoryIdentify', $categoryIdentify)->get();
        if (!$record) return redirect('admin/categories');
        return $this->adminView('categories/categorySingle', ['category' => $record[0]]);
    }

    public function categoryDestroy(Request $request, Response $response, $categoryIdentify)
    {
        $this->model('CategoryModel')->where('categoryIdentify', $categoryIdentify)->delete();
        return redirect('admin/categories');
    }

    public function categoryTruncate(Request $request, Response $response)
    {
        $model = $this->model('CategoryModel');
        $ids   = $request->getBody()['selectedIds'] ?? [];

        if (! empty($ids)) {
            foreach ($ids as $id) {
                $model->delete($id, 'categoryIdentify');
            }
        } else {
            $model->truncate();
        }

        return redirect('admin/categories');
    }

    public function categoryExport(Request $request, Response $response)
    {
        $model = $this->model('CategoryModel');
        $records = $model->findAll()->get();
        $model->export($records, 'categories_export.csv');
    }

    public function categoryImport(Request $request, Response $response)
    {
        try {
            $result = $this->model('CategoryModel')->import($_FILES['file']);
            $_SESSION['success_message'] = "Imported {$result['imported']} records. Skipped: {$result['skipped']}, Failed: {$result['failed']}";
        } catch (Exception $e) {
            $_SESSION['error_message'] = 'Import failed: ' . $e->getMessage();
        }
        return redirect('admin/categories');
    }
}
