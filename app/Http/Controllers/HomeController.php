<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{
    public function index(){
        $title = 'MyMovies';
        return view('home',compact('title'));
    }
}
