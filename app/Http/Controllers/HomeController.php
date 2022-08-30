<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\StaticPart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $staticPart = StaticPart::first();
        return view('welcome', ['slider' => $slider, 'staticPart' => $staticPart]);
    }
}
