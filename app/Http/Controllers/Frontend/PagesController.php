<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function getindex(){
        return view('frontend.pages.index');
    }


    // gioithieu
    public function getAbout(){
        return view('frontend.pages.about');
    }
    // lien he

    public function getContact(){
        return view('frontend.pages.contact');
    }
}
