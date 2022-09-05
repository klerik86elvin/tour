<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Http\Requests\InteractsWithLenses;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Person extends Model implements HasMedia
{
    use HasFactory,  InteractsWithMedia, HasTranslations;

    public $translatable = ['name', 'position', 'text'];

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main')->singleFile();
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(430)
            ->height(400)
            ->sharpen(10);
    }
}
