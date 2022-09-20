<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class DailyPlan extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name'];

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    public function tour()
    {
        return$this->belongsTo(Tour::class);
    }

    public function options()
    {
        return $this->hasMany(DailyPlanOption::class);
    }
}
