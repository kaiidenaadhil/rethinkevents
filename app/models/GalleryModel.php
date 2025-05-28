<?php

class GalleryModel extends Model
{
    protected $table      = 'galleries';
    protected $primaryKey = 'galleryId';

    protected array $validationRules = [
        'galleryMedia' => 'nullable|file|nullable',
        'caption' => 'required|max:255|nullable',
        'eventId' => 'required',
    ];

    public function event()
    {
        return $this->belongsTo(EventModel::class, 'eventId', 'eventId');
    }

}
