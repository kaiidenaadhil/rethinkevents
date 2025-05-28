<?php

class CampaignModel extends Model
{
    protected $table      = 'campaign';
    protected $primaryKey = 'campaignId';

    protected array $validationRules = [
        'campaignTitle' => 'required|max:255|nullable',
        'campaignSlogan' => 'required|max:255|nullable',
        'campaignMedia' => 'nullable|file|nullable',
        'campaignAction' => 'required|max:255|nullable',
    ];

}
