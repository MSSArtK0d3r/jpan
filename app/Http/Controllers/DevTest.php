<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Entry;

class DevTest extends Controller {

    public function index(){
        
        $TotalOfERatingE1 = DB::table('entries')->pluck('E1');
        $TotalOfERatingE2 = DB::table('entries')->pluck('E2');
        $TotalOfERatingE3 = DB::table('entries')->pluck('E3');
        $TotalOfERatingE4 = DB::table('entries')->pluck('E4');
        $TotalOfERatingE5 = DB::table('entries')->pluck('E5');
        $TotalOfERatingE6 = DB::table('entries')->pluck('E6');
        
        $totalEPositive = array_merge(
            $TotalOfERatingE1->toArray(),
            $TotalOfERatingE2->toArray(),
            $TotalOfERatingE3->toArray()
        );
        $totalEPositive = array_sum($totalEPositive);

        //calculate E4
        $countTotalVoteE4 = count(array_filter($TotalOfERatingE4->toArray()));
        $totalMaxpointsE4 = $countTotalVoteE4 * 10;
        $respondedTotalPointsE4 = array_sum($TotalOfERatingE4->toArray());

        //calculate E5
        $countTotalVoteE5 = count(array_filter($TotalOfERatingE5->toArray()));
        $totalMaxpointsE5 = $countTotalVoteE5 * 10;
        $respondedTotalPointsE5 = array_sum($TotalOfERatingE5->toArray());

        //calculate E6
        $countTotalVoteE6 = count(array_filter($TotalOfERatingE6->toArray()));
        $totalMaxpointsE6 = $countTotalVoteE6 * 10;
        $respondedTotalPointsE6 = array_sum($TotalOfERatingE6->toArray());

        

        $totalENegative = 0;

        // $countTotalE = count($TotalOfERatingE1->toArray());
        // $totalEPositive = array_sum($totalE);
        // $totalPointsE = $countTotalE * 6 * 10;
        // $totalE = ($totalE * 100) / $totalPointsE;
        // $totalE = round($totalE, 2);

        return view('dev', compact('totalEPositive'));
        
    }

}