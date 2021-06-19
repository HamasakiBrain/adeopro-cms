<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function about(){
        return view('pages.about');
    }
    public function payment(){
        return view('pages.payment');
    }
    public function contacts(){
        return view('pages.contacts');
    }
    public function delivery(){
        return view('pages.delivery');
    }
    public function dillers(){
        return view('pages.dillers');
    }
}
