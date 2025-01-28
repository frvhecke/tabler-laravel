<?php

namespace App\View\Components\alert;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{
    //
    // PARAMETERS
    //

    // Title for the alert
    public $title;

    // Optional description for the alert
    public $description;

    // Optional icon for the alert
    public $icon;

    // Color for the alert (default: success)
    public $color;

    // Flag indicating whether alert is dismissible
    public $dismissible;

    // Flag indicating whether alert is important (using color as background for alert box)
    public $important;


    //
    // CONSTRUCTORS
    //

    /**
     * Create a new component instance.
     */
    public function __construct($title = "",
                                $description = "",
                                $icon = "",
                                $color = "success", 
                                $dismissible = false,
                                $important = false)
    {
        $this->title = $title;
        $this->description = $description;
        $this->icon = $icon;
        $this->color = $color;
        $this->dismissible = $dismissible;
        $this->important = $important;
    }


    //
    // METHODS
    //

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert.alert');
    }
}
