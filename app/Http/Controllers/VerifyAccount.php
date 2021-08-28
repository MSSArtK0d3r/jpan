<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VerifyAccount extends Controller
{
    public function index($uuid) {
        $data = DB::table('entries')->select('uuid')->where('uuid', $uuid)->first();
        
        if (is_null($data) == true) {
            return redirect()->route('invalid');
        } else {
            $hasVerified = DB::table('entries')->select('verified')->where('uuid', $uuid)->first();
            if ($hasVerified->verified == 'verified') {
                return redirect()->route('doneverify');
            }
            DB::table('entries')->where('uuid', $uuid)->update(array(
                'verified' => 'verified'
            ));
            
            return redirect()->route('verified');
        }
    }
}
