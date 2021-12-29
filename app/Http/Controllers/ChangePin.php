<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangePin extends Controller
{
    public function index(Request $request){
        
        return view('users.changepin');
    }

    public function changePin(Request $request){
        $user = $request->session()->get('identity');
        $pins = $request->pin1.$request->pin2.$request->pin3.$request->pin4.$request->pin5.$request->pin6;
        
        DB::table('entries')->where('email', $user)
        ->update(array('pin' => $pins));

        return view('users.pinupdated');

    }
}
