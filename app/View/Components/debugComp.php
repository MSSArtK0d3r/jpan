<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class debugComp extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $user;
    public $message;
    public function __construct(Request $request, $user = null, $message=null)
    {
        
        $this->user = $request->session()->get('identity');
        $this->message = $message;
    }

    public function getCompletedR(){
        
        $data = DB::table('entries')->select('completedR')->where('email', $this->user)->get()->toArray();
        $data = $data[0]->completedR;
        $this->message = 'heheheheh';
        return $this->message;
    }

    public function test(){
        $this->message = 'heheheheh world';
        return $this->message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.debug-comp');
    }
}
