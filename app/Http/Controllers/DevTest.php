<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Entry;
use Maatwebsite\Excel\Concerns\ToArray;

class DevTest extends Controller {

    public function index(){
        $TotalOfKRatingK1 = DB::table('entries')
        ->where('completedR', 1)
        ->pluck('K1');
        return view('dev', compact('TotalOfKRatingK1'));
    }

}