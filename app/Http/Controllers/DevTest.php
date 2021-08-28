<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Entry;
use Maatwebsite\Excel\Concerns\ToArray;
use Webpatser\Uuid\Uuid;

class DevTest extends Controller {

    public function index(Request $request){
        $uuid = DB::table('entries')->select('verified')->where('email', 'a@sabah.gov.my')->first();
        $data = $uuid;
        
        return view('dev', compact('data'));
    }

}