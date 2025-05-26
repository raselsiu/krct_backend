<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function Contact()
    {
        return view('frontend.pages.contact');
    }

    public function donations()
    {
        return view('frontend.pages.donation');
    }

    public function event()
    {
        return view('frontend.pages.events');
    }

    public function gallery()
    {
        return view('frontend.pages.gallery');
    }

    public function medical_corner()
    {
        return view('frontend.pages.medical-corner');
    }

    
    public function news()
    {
        return view('frontend.pages.news');
    }

    public function services()
    {
        return view('frontend.pages.services');
    }

    public function staff()
    {
        return view('frontend.pages.staff');
    }

    public function student()
    {
        return view('frontend.pages.student');
    }

    public function trustees()
    {
        return view('frontend.pages.trustees');
    }

    public function volunteer()
    {
        return view('frontend.pages.volunteer');
    }

    public function volunteer_regi()
    {
        return view('frontend.pages.volunteer_regi');
    }
}
