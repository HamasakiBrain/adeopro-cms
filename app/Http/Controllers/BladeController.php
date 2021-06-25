<?php

namespace App\Http\Controllers;

use App\Models\Diller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function auto(){
        return view('pages.catalog.avto');
    }

    public function cabinet(){
        $user = auth()->user();
        return view('cabinet.index')->with(['user' => $user]);
    }

    public function userUpdate(Request $request){
        $user = User::find(auth()->user()->id);
        $user->update($request->all());
        $user->save();
        return redirect()->back();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function passwordUpdate(Request $request){
        $user = User::find(auth()->user()->id);

        if (Hash::check($request->oldPassword, $user->password)){
            $user->password = Hash::make($request->newPassword);
            $user->save();
            return redirect()->back()->with(['message' => 'Пароль успешно обновлен']);
        } else {
            return redirect()->back()->with(['message' => 'Неправильный старый пароль']);
        }
    }
}
