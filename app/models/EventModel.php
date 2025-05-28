<?php

class EventModel extends Model
{
    protected $table      = 'events';
    protected $primaryKey = 'eventId';

    protected array $validationRules = [
        'eventTitle' => 'required|max:255',
        'eventDescription' => 'required|max:500',
        'eventDate' => '',
        'location' => 'required|max:255',
        'organisedBy' => 'required|max:255',
        'eventFeatureImage' => 'nullable|file',
    ];

    public function galleries()
    {
        return $this->hasMany(GalleryModel::class, 'eventId', 'eventId');
    }
}
