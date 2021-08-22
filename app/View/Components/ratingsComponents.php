<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingsComponents extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $initialQuestion;
    public $questionNumber;
    public $sectionQuestion;
    public $userData;
    public $totalQuestion;
    public $getUser;
    //public $sectionComplete;

    public function __construct($initialQuestion, $questionNumber, $sectionQuestion, $userData, $totalQuestion = '',$getUser=null,Request $request)
    {
        $this->initialQuestion = $initialQuestion;
        $this->questionNumber = $questionNumber;
        $this->sectionQuestion = $sectionQuestion;
        $this->userData = $userData;
        $this->totalQuestion = $totalQuestion;
        $this->getUser = $request->session()->get('identity');


        //$this->sectionComplete = $sectionComplete;
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
        return view('components.ratings-components');
    }
}
