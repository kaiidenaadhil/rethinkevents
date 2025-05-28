<?php

class LeadModel extends Model
{
    protected $table      = 'leads';
    protected $primaryKey = 'leadId';

    protected array $validationRules = [
        'clientName' => 'required|max:250|nullable',
        'email' => 'required|max:250|nullable',
        'phone' => 'required|max:20|nullable',
        'notes' => 'required|max:1000|nullable',
        'interestedIn' => 'in:Events,Printing,Interior,General Supply, Acoustic Solution|nullable',
        'status' => 'in:new, contacted, converted, lost|nullable',
    ];

}
