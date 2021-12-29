<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DevTest extends Controller {

    public function index(Request $request){
        $data = DB::table('entries')->select('pin')->where('email', 'c@sabah.gov.my')->get();
        //$data = $userData[0]->C1;
        
        return view('dev', compact('data'));
    }

}