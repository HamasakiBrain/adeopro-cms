<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function index(  ){
        $countries = Country::all();
        return view('admin.country.create')->with([
            'countries' => $countries
        ]);
    }

    public function store(Request $request){

        Country::create($request->all());

        return redirect()->back()->with([
            'message' => 'Успешно создан',
        ]);
    }

    public function destroy($id){
        Country::destroy($id);
        return redirect()->back();
    }


}
