<?php

class SettingModel extends Model
{
    protected $table      = 'settings';
    protected $primaryKey = 'settingId';

    protected array $validationRules = [
        'settingKey' => 'required|max:250|nullable',
        'settingValue' => 'required|max:250|nullable',
    ];

}
