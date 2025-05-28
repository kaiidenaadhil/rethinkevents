<?php

class ClientModel extends Model
{
    protected $table      = 'clients';
    protected $primaryKey = 'clientId';

    protected array $validationRules = [
        'clientName' => 'required|max:250|nullable',
        'clientEmail' => 'required|max:250|nullable',
        'clientMobile' => 'required|max:20|nullable',
        'clientAddress' => 'required|max:1000|nullable',
        'clientImage' => 'nullable|file|nullable',
        'clientReference' => 'required|max:500|nullable',
    ];

}
