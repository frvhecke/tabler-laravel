<?php

namespace App\View\Components\card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
{
    //
    // PARAMETERS
    //

    // Title for the card header
    public $title;

    // Icon for the card header
    public $icon;


    //
    // CONSTRUCTOR
    //

    /**
     * Create a new component instance.
     */
    public function __construct($title = '', $icon = '')
    {
        $this->title = $title;
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
        return view('components.card.header');
    }
}
