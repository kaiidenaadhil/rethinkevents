<?php

class TeamModel extends Model
{
    protected $table      = 'teams';
    protected $primaryKey = 'teamId';

    protected array $validationRules = [
        'memberName' => 'required|max:250|nullable',
        'designation' => 'required|max:250|nullable',
        'email' => 'required|max:250|nullable',
        'mobile' => 'required|max:250|nullable',
        'profileImage' => 'nullable|file|nullable',
        'bio' => 'required|max:500|nullable',
    ];

}
