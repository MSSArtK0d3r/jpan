<?php

namespace App\View\Components;

use Illuminate\View\Component;

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

    public function __construct($initialQuestion, $questionNumber, $sectionQuestion, $userData, $totalQuestion = '')
    {
        $this->initialQuestion = $initialQuestion;
        $this->questionNumber = $questionNumber;
        $this->sectionQuestion = $sectionQuestion;
        $this->userData = $userData;
        $this->totalQuestion = $totalQuestion;
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
