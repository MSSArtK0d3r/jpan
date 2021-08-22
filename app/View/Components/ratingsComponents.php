<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ratingsComponents extends Component
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

    public function __construct($initialQuestion, $questionNumber, $sectionQuestion, $userData, $totalQuestion = '', Request $request, $getUser='')
    {
        $this->initialQuestion = $initialQuestion;
        $this->questionNumber = $questionNumber;
        $this->sectionQuestion = $sectionQuestion;
        $this->userData = $userData;
        $this->totalQuestion = $totalQuestion;
        $this->getUser = $request->session()->get('identity');

        //$this->sectionComplete = $sectionComplete;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = DB::table('entries')->select('completedR')->where('email', $this->getUser)->get()->toArray();
        $completedR = $data[0]->completedR;
        return view('components.ratings-components', compact('completedR'));
    }
}
