<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class IsFilled extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $user;
    public $key;
    public $index;
    
    public function __construct(Request $request, $user=null, $key, $index)
    {
        $this->user = $request->session()->get('identity');
        $this->key = $key;
        $this->index = $index;
        

    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = DB::table('entries')->select($this->data)->where('email', $this->user)->get();
        $isFilled = $data[0];
        return view('components.is-filled', compact('isFilled'));
    }
}
