<?php

namespace App\View\Components\button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class standard extends Component
{
    //
    // PARAMETERS
    //

    // Type of the button ('button' or 'link')
    public $type;

    // Destination for the link
    public $href;

    // Target for the link
    public $target;

    // Color for the button
    public $color;

    // Full width state of the button
    public $fullwidth;

    // Active state of the button
    public $active;

    // Disabled state of the button
    public $disabled;

    // Aria label for the button
    public $arialabel;


    //
    // CONSTRUCTORS
    //

    /**
     * Create a new button component instance.
     */
    public function __construct($type = 'button',
                                $href = '#',
                                $target = '_self', 
                                $color = '',
                                $fullwidth = false,
                                $active = false, 
                                $disabled = false,
                                $arialabel = "")
    {
        $this->type = $type;
        $this->href = $href;
        $this->target = $target;
        $this->color = $color;
        $this->fullwidth = $fullwidth;
        $this->active = $active;
        $this->disabled = $disabled;
        $this->arialabel = $arialabel;
    }


    //
    // METHODS
    //

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.standard');
    }
}
