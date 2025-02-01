<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class checkbox extends Component
{
    //
    // PARAMETERS
    //

    // Name for the checkbox
    public $name;

    // Text for the checkbox
    public $text;

    // Optional description for the checkbox
    public $description;

    // Value for the checkbox
    public $value;

    // Flag indicating whether the checkbox is selected
    public $selected;

    // Flag indicating whether the checkbox is disabled
    public $disabled;

    // Flag indicating whether the checkbox is inline displayed
    public $inline;


    //
    // CONSTRUCTORS
    //

    /**
     * Create a new component instance.
     */
    public function __construct($name = "", $text = "", $description = "", $value = "", $selected = false, $disabled = false, $inline = false)
    {
        $this->name = $name;
        $this->text = $text;
        $this->description = $description;
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
        return view('components.form.checkbox');
    }
}
