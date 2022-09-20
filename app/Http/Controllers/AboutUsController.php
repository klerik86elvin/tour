<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Person;
use App\Models\TourType;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $tourTypes = TourType::all();
        $persons = Person::all();
        $text = AboutUs::first();
        return view('about-us', compact('tourTypes', 'text','persons'));
    }
}
