<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Slider;
use App\Models\StaticPart;
use App\Models\Tour;
use App\Models\TourType;
use Faker\Factory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $perosons = Person::all();
        $saleTours = Tour::take(4)->get();
        $slider = Slider::all();
        $staticPart = StaticPart::first();
        $tourTypes = TourType::with('tours')->take(3)->get();
        return view('welcome', [
            'slider' => $slider,
            'staticPart' => $staticPart,
            'tourTypes'=> $tourTypes,
            'saleTours' => $saleTours,
            'persons' => $perosons
        ]);
    }
}
