<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textarea extends Component
{
    //
    // PARAMETERS
    //

    // Name for the textarea
    public $name;

    // Number of rows for the textarea
    public $rows;

    // Placeholder for the textarea
    public $placeholder;

    // Value for the text area
    public $value;

    // Flag indicating whether textarea is disabled
    public $disabled;

    // Flag indicating whether textarea is read-only
    public $readonly;

    // Flag indicating whether textarea should autosize
    public $autosize;


    //
    // CONSTRUCTORS
    //

    /**
     * Create a new component instance.
     */
    public function __construct($name = "", $rows = 5, $placeholder = "", $value = "", $disabled = false, $readonly = false, $autosize = false)
    {
        $this->name = $name;
        $this->rows = $rows;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
        $this->autosize = $autosize;
    }


    //
    // METHODS
    //

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.textarea');
    }
}
