<?php

namespace App\Http\Controllers;

use App\Models\Diller;
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
        $dillers = Diller::all();
        return view('pages.dillers')->with(['dillers' => $dillers]);
    }
}
