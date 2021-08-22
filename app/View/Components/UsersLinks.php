<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class UsersLinks extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $user;
    public $completedA;
    public $completedB;
    public $completedC;
    public $completedD;
    public $completedE;
    public $completedF;
    public $completedG;
    public $completedH1;
    public $completedH2;
    public $completedH3;
    public $completedH4;
    public $completedI;
    public $completedJ;
    public $completedK;
    public $completedL;
    public $completedM;
    public $completedN;
    public $completedO;
    public $completedP;
    public $completedQ;
    public $completedR;
    public $paymentChoose;
    public $getUser;

    public function __construct($user, $completedA, $completedB, $completedC, $completedD, $completedE, $completedF, $completedG, $completedH1, $completedH2, $completedH3, $completedH4, $completedI, $completedJ, $completedK, $completedL, $completedM, $completedN, $completedO, $completedP, $completedQ, $completedR, $paymentChoose, $getUser=null, Request $request)
    {
        $this->user = $user;
        $this->completedA = $completedA;
        $this->completedB = $completedB;
        $this->completedC = $completedC;
        $this->completedD = $completedD;
        $this->completedE = $completedE;
        $this->completedF = $completedF;
        $this->completedG = $completedG;
        $this->completedH1 = $completedH1;
        $this->completedH2 = $completedH2;
        $this->completedH3 = $completedH3;
        $this->completedH4 = $completedH4;
        $this->completedI = $completedI;
        $this->completedJ = $completedJ;
        $this->completedK = $completedK;
        $this->completedL = $completedL;
        $this->completedM = $completedM;
        $this->completedN = $completedN;
        $this->completedO = $completedO;
        $this->completedP = $completedP;
        $this->completedQ = $completedQ;
        $this->completedR = $completedR;
        $this->paymentChoose = $paymentChoose;
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
        $totalResponden = DB::table('entries')
                ->where('completedR','=', '1')
                ->count();
        return view('components.users-links', compact('totalResponden'));
    }
}
