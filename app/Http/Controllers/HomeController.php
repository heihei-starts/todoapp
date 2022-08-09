<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    //ホームに飛ばす。
    public function homeGet()
    {
        return view('home');
    }
}
