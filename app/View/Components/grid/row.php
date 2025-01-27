<?php

namespace App\View\Components\grid;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class row extends Component
{
    //
    // PARAMETERS
    //

    // Flag for the row-cards styling
    public $cards;

    public $gutter;

    public $center;


    //
    // CONSTRUCTOR
    //

    /**
     * Create a new component instance.
     */
    public function __construct($cards = false, $gutter = -1, $center = false)
    {
        $this->cards = $cards;
        $this->gutter = ($gutter >= 0 && $gutter <= 5) ? $gutter : -1;
        $this->center = $center;
    }


    //
    // METHODS
    //
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.grid.row');
    }
}
