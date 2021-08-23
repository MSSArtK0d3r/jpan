<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Entry;
use Maatwebsite\Excel\Concerns\ToArray;

class DevTest extends Controller {

    public function index(){
        $entry = DB::table('entries')->where('completedR', 1)->first();
        
        $data = $entry;
        

        return view('dev');
    }

}