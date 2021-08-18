<?php

namespace App\View\Components;

use Illuminate\View\Component;

class dimensiInfoPointC extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $userPoints;
    public function __construct($userPoints)
    {
        $this->userPoints = $userPoints;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dimensi-info-point-c');
    }
}
