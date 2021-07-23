<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DevTest extends Controller
{
    public function index(){
        // $data = array();
        // $data['test'] = 'Hello';
        
        return view('dev');
    }

}
