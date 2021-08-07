<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Entry;

class DevTest extends Controller {

    public function index(){
        $section = 'B';
        $ns = 2;
        $number = -1;
        while ($number <= 9){
            $number++;
       echo htmlspecialchars('
       <div class="rating">
            <label for="'.$number.'">
                <input {{ $userData[0]->'.$section.$ns.' == '.$number.' ? "checked" : "" }} type="radio" id="'.$number.'" name="'.$section.$ns.'" value="'.$number.'">'.$number.'
            </label>
        </div>
       ');
        }
        
    }

}