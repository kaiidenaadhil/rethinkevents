<?php

class CategoryModel extends Model
{
    protected $table      = 'categories';
    protected $primaryKey = 'categoryId';

    protected array $validationRules = [
        'categoryName' => 'required|max:250|nullable',
        'categoryDescription' => 'required|max:250|nullable',
    ];

}
