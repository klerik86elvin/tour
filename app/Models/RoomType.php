<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class RoomType extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name'];


    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
    public function tours()
    {
        return $this->hasMany(Tour::class);
    }
}
