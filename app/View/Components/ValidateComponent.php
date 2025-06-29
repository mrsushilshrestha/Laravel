<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ValidateComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $message;
    public $class;

    public function __construct($message,$class)
    {
        $this->message = $message;
        $this->class= $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.validate-component');
    }
}
