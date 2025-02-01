<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class radio extends Component
{
    //
    // PARAMETERS
    //

    // Name for the radio button
    public $name;

    // Text for the radio button
    public $text;

    // Value for the radio button
    public $value;

    // Flag indicating whether the radio button is selected
    public $selected;

    // Flag indicating whether the radio button is disabled
    public $disabled;

    // Flag indicating whether the radio button is inline displayed
    public $inline;


    //
    // CONSTRUCTORS
    //

    /**
     * Create a new component instance.
     */
    public function __construct($name = "", $text = "", $value = "", $selected = false, $disabled = false, $inline = false)
    {
        $this->name = $name;
        $this->text = $text;
        $this->value = $value;
        $this->selected = $selected;
        $this->disabled = $disabled;
        $this->inline = $inline;
    }


    //
    // METHODS
    //

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.radio');
    }
}
