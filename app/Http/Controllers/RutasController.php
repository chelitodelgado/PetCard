<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function generate(){
        return view('layouts.generate');
    }
    
    public function about(){
        return view('layouts.about');
    }

    public function contact(){
        return view('layouts.contact');
    }
}
