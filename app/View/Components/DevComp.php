<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DevComp extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $user;
    public function __construct(Request $request, $user=null)
    {
        $this->user = $request->session()->get('identity');
    }

    public function test(){
        $data = DB::table('entries')->select('completedR')->where('email', $this->user)->get()->toArray();
        $data = $data[0]->completedR;
        return $data;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dev-comp');
    }
}
