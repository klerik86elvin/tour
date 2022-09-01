<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Tour extends Model implements HasMedia
{
    use HasFactory, HasTranslations, InteractsWithMedia;

    public $translatable = ['name', 'options', 'days'];

//    protected $casts = [
//        'date' => 'datetime:d.m.Y', // Change your format
//    ];

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    public function tourType()
    {
        return $this->belongsTo(TourType::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main')->singleFile();
    }
}
