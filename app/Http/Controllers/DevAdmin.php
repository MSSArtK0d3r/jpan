<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Brackets\AdminListing\AdminListing;
use App\Models\Entry;
use Brackets\AdminListing\Facades\AdminListing;

class DevAdmin extends Controller
{
    public function index(){
        $data = AdminListing::create(Entry::class)->get(
            [
                'uuid',
                'umur'
            ]
        );



        return view('admin.devAdmin', ['data' => $data]);
    }
}
