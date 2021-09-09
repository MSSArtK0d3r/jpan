<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DevTest extends Controller {

    public function index(Request $request){
        $uuid = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B1');
        $uuid2 = DB::table('entries')->where('completedR', 1)->pluck('B1');
        $data = $uuid2;
        
        return view('dev', compact('data'));
    }

}