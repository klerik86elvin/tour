<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TourType;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $tourTypes = TourType::all();
        $services = Service::all();
        return view('services', compact('tourTypes','services'));
    }
}
