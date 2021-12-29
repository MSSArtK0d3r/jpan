<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DevTest extends Controller {

    public function index(Request $request){
        $email = DB::table('entries')->select('pin')->where('email', 'c@sabah.gov.my')->get();
        $data = $email[0]->pin;
        
        return view('dev', compact('data'));
    }

    public function getParam(Request $request){
        $email = $email = DB::table('entries')->select('pin')->where('email', $request->email)->get();
        $data = $email[0]->pin;

        return view('devB',compact('data'));
    }

}