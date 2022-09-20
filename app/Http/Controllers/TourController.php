<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourType;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index($id)
    {
        $tourTypes = TourType::all();
        $tour = Tour::findOrFail($id);
        return view('tour', compact('tour', 'tourTypes'));
    }
}
