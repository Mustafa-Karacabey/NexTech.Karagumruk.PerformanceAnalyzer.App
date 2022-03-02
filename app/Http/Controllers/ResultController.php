<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Place;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{


    public function index(){

        return view('home.index',$data);
    }



    // CategoryList will works if categoryplaces existed
    public static function categoryList()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    // --> static function will return settings
    public static function getsetting()
    {
        return Setting::first();
    }



}
