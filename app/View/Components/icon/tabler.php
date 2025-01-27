<?php

namespace App\View\Components\icon;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tabler extends Component
{
    //
    // PARAMETERS
    //

    // Tabler icon identifier to used
    public $icon;


    //
    // CONSTRUCTOR
    //

    /**
     * Create a new component instance.
     */
    public function __construct($icon = '')
    {
        $this->icon = $icon;
    }


    //
    // METHODS
    //

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.icon.tabler');
    }
}
