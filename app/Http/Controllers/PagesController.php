<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    function home(){
        return view("public.home");
    }
    function about(){
        return view('public.about');
    }
}
