<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Entry;

class DevTest extends Controller {

    public function index(){
        $totalResponden = DB::table('entries')
                ->where('completedR', 1)
                ->count();
        
        return view('dev', compact('totalResponden'));
    }

}