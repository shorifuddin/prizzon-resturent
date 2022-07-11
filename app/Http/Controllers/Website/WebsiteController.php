<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('frontend.home.index');
    }

    public function reservation(){
        return view('frontend.reservation.reservation');
    }

    public function about(){
        return view('frontend.about.about');
    }

    public function contact(){
        return view('frontend.contact.contact');
    }

    public function menu(){
        return view('frontend.menu.menu');
    }
}
