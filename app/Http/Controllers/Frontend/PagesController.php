<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;

class PagesController extends Controller
{
    public function getindex(){
        $slider = Slider::select('name','title','image','url')->orderBy('id','DESC')->skip(0)->take(5)->get();
        return view('frontend.pages.index',compact('slider'));
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
