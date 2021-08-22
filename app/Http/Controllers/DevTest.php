<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Entry;
use Maatwebsite\Excel\Concerns\ToArray;

class DevTest extends Controller {

    public function index(){
        $data = DB::table('entries')->select('completedR')->where('email', 'a@a.com')->get()->toArray();
        $data = $data[0]->completedR;
        return view('dev', compact('data'));
    }

}