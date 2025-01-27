<?php

namespace App\View\Components\page;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class page extends Component
{
    //
    // PARAMETERS
    //

    // Flag indicating whether or not dark mode is applied
    public $dark;


    //
    // CONSTRUCTOR
    //

    /**
     * Create a new component instance.
     */
    public function __construct($dark = 'false')
    {
        $this->dark = ($dark == 'true') ? true : false;
    }


    //
    // METHODS
    //

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page.page');
    }
}
