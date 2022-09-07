<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\TourType;
use Illuminate\Http\Request;

class TourTypeController extends Controller
{
    public function index($id){
        $tourTypeContent = TourType::findOrFail($id);
        $tours = $tourTypeContent->tours()->paginate(16);
        $banner = Banner::first();
        $tourTypes = TourType::all();
        return view('tour-type', compact('tourTypeContent', 'tourTypes', 'banner','tours'));
    }
}
