<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\About;
use App\Models\Post;
class PagesController extends Controller
{
    public function getindex(){
        $slider = Slider::select('name','title','image','url')->orderBy('id','DESC')->skip(0)->take(5)->get();
        $about = About::select('title','content','image','image_1','image_2','image_3','video')->skip(0)->take(1)->get();
        $breakfast = Post::select('title','excerpt','image','price')->where('category_id',1)->orderBy('id','DESC')->skip(0)->take(3)->get();
        $lunch = Post::select('title','excerpt','image','price')->where('category_id',2)->orderBy('id','DESC')->skip(0)->take(3)->get();
        $dinner = Post::select('title','excerpt','image','price')->where('category_id',3)->orderBy('id','DESC')->skip(0)->take(3)->get();
        $desserts = Post::select('title','excerpt','image','price')->where('category_id',4)->orderBy('id','DESC')->skip(0)->take(3)->get();
        $wine_card = Post::select('title','excerpt','image','price')->where('category_id',5)->orderBy('id','DESC')->skip(0)->take(3)->get();
        $drinks = Post::select('title','excerpt','image','price')->where('category_id',6)->orderBy('id','DESC')->skip(0)->take(3)->get();
        return view('frontend.pages.index',compact('slider','about','breakfast','lunch','dinner','desserts','wine_card','drinks'));
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
