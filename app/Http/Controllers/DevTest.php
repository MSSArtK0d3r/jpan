<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Entry;
use Maatwebsite\Excel\Concerns\ToArray;

class DevTest extends Controller {

    public function index(){
        $entry = DB::table('entries')->where('email','=', 'a@sabah.gov.my')->first();
        $TotalOfLRatingL1 = DB::table('entries')->where('completedR', 1)->pluck('L1');
        $TotalOfLRatingL2 = DB::table('entries')->where('completedR', 1)->pluck('L2');
        $TotalOfLRatingL3 = DB::table('entries')->where('completedR', 1)->pluck('L3');
        $TotalOfLRatingL4 = DB::table('entries')->where('completedR', 1)->pluck('L4');
        
        $TotalLP = array_sum(array_merge(
            $TotalOfLRatingL4->toArray()
        ));

        $TotalLN = array_sum(array_merge(
            $TotalOfLRatingL1->toArray(),
            $TotalOfLRatingL2->toArray(),
            $TotalOfLRatingL3->toArray()
        ));
        
        $TotalResponden = count($TotalOfLRatingL1->toArray());
        $MaxPointsL = $TotalResponden * 40;

        $MaxPointNeg = $TotalResponden * 30;
        $TotalPointLNeg = $MaxPointNeg - $TotalLN;

        $totalL = ($TotalLP + $TotalPointLNeg) / $MaxPointsL * 100;
        //$totalK = round($totalK, 2);
        
        $data = $totalL;
        

        return view('dev', compact('data'));
    }

}