<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\TourType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function index()
    {
        $tourTypes = TourType::all();
        return view('contact-us', compact('tourTypes'));
    }

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(),[
           'title' => ['required', 'max:255'],
           'mail' => ['required', 'email'],
           'text' => ['required']
        ]);
        $data = $validator->validate();
        ContactUs::create($data);
        return  redirect()->back()->with(['message' => __('Ваше сообщение отправлено')]);
    }
}
