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

    //
    // CONSTRUCTORS
    //

    /**
     * Create a new component instance.
     */
    public function __construct($name = "", $placeholder = "", $value = "", $disabled = false, $readonly = false, $mask = "")
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
        $this->mask = $mask;
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
