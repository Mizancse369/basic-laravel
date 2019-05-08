<?php

namespace App\Http\Controllers;

class FrontendController extends Controller
{

    function index()
    {
        return view('welcome');
    }
    function about()
    {
       return view('about');
    }

    function contact(){
        return view('contact');
    }
}
