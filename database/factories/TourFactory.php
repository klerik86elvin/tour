<?php

namespace Database\Factories;

use App\Models\Tour;
use App\Models\TourType;
use Illuminate\Database\Eloquent\Factories\Factory;

class TourFactory extends Factory
{
    protected $model = Tour::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tour_type_id' => $this->faker->randomElement(TourType::all()->pluck('id')),
            'name' => 'Испания / Мадрид',
            'options' => 'отель, питание, трансфер, страховка',
            'days' => '7 ночей/ 8 дней',
            'price' => $this->faker->randomFloat(2, 100, 300),
            'date' => $this->faker->dateTimeInInterval('1 week', '+7 week')
        ];
    }
}
