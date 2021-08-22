<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class BtnSubmit extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $getUser;
    public function __construct(Request $request, $getUser=null)
    {
        $this->getUser = $request->session()->get('identity');
    }

    public function getCompletedR(){
        $data = DB::table('entries')->select('completedR')->where('email', $this->getUser)->get()->toArray();
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
        return view('components.btn-submit');
    }
}
