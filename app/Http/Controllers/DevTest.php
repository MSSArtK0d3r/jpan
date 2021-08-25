<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Entry;
use Maatwebsite\Excel\Concerns\ToArray;

class DevTest extends Controller {

    public function index(){
        $entry = DB::table('entries')->select('saguhati')->where('email', '=', 'a@sabah.gov.my')->get()->toArray(); 
        
        $data = $entry[0]->saguhati;
        

        return view('dev', compact('data'));
    }

}