<?php

class TestimonialModel extends Model
{
    protected $table      = 'testimonials';
    protected $primaryKey = 'testimonialId';

    protected array $validationRules = [
        'clientName' => 'required|max:250|nullable',
        'clientCompany' => 'required|max:250|nullable',
        'testimonialText' => 'required|max:1000|nullable',
        'clientImage' => 'nullable|file|nullable',
    ];

}
