<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class text extends Component
{
    //
    // PARAMETERS
    //

    // Name for the text field
    public $name;

    // Placeholder for the text field
    public $placeholder;

    // Value for the text field
    public $value;

    // Flag indicating whether field is disabled
    public $disabled;

    // Flag indicating whether field is read-only
    public $readonly;

    // Mask for the text field
    public $mask;

    // Flag indicating whether style is rounded
    public $rounded;

    // Icon to be added to the text field
    public $icon;

    // Flags indicating whether icon should be at start or end of the input field
    public $icon_start;
    public $icon_end;

    // Color for the icon (optional, if different than text)
    public $icon_color;


    //
    // CONSTRUCTORS
    //

    /**
     * Create a new component instance.
     */
    public function __construct($name = "", $placeholder = "", $value = "",
                                $disabled = false, $readonly = false, $mask = "", $rounded = false,
                                $icon = "", $icon_start = false, $icon_end = false, $icon_color = "")
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
        $this->mask = $mask;
        $this->rounded = $rounded;
        $this->icon = $icon;
        $this->icon_start = $icon_start;
        $this->icon_end = $icon_end;
        $this->icon_color = $icon_color;
    }


    //
    // METHODS
    //

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.text');
    }
}
