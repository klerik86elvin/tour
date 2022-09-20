<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Tour extends Model implements HasMedia
{
    use HasFactory, HasTranslations, InteractsWithMedia;

    public $translatable = ['name', 'options', 'days','inclusions','exclusions'];

    protected $casts = [
        'date' => 'datetime:d.mm.Y', // Change your format
    ];

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    public function dailyPlans()
    {
        return $this->hasMany(DailyPlan::class);
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }
    public function pax()
    {
        return $this->belongsTo(Pax::class);
    }
    public function hotels()
    {
        return $this->belongsToMany(Hotel::class);
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(350);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main')->singleFile();
    }
    public function tourType()
    {
        return $this->belongsTo(TourType::class);
    }


}
