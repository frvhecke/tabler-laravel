<?php

namespace App\View\Components\page;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
{
    //
    // PARAMETERS
    //

    // Title for the page header
    public $title;

    // Pre-title for the page header
    public $pretitle;


    //
    // CONSTRUCTORS
    //

    /**
     * Create a new component instance.
     */
    public function __construct($title = "", $pretitle = "")
    {
        $this->title = $title;
        $this->pretitle = $pretitle;
    }


    //
    // METHODS
    //

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page.header');
    }
}
