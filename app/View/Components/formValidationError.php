<?php

namespace App\View\Components;

use Illuminate\View\Component;

class formValidationError extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $key;
    public $index;
    public function __construct($key='', $index='')
    {
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
        return view('components.form-validation-error');
    }
}
