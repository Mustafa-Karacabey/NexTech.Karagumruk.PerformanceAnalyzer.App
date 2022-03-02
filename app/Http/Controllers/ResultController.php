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

        $data=Player::all();
        return view('result.index', $data);
    }

}
