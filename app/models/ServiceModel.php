<?php

class ServiceModel extends Model
{
    protected $table      = 'services';
    protected $primaryKey = 'serviceId';

    protected array $validationRules = [
        'serviceTitle' => 'required|max:250',
        'serviceCategory' => 'required',
        'serviceType' => 'in:Events,Printing,Interior,General Supply, Acoustic Solution',
        'description' => 'required|max:1100',
        'serviceImage' => 'nullable|file',
    ];

    public function service_category()
    {
        return $this->belongsTo(Service_categoryModel::class, 'serviceCategory', 'categoryId');
    }

}
