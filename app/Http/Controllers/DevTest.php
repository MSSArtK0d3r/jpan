<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Entry;
use Maatwebsite\Excel\Concerns\ToArray;

class DevTest extends Controller {

    public function index(Request $request){
        $uuid = 'asdasdasd';
        $data = route('verify', $uuid);
        
        return view('dev', compact('data'));
    }

}