<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class label extends Component
{
  //
  // PARAMETERS
  //

  // Text for the form label
  public $text;

  // Flag indicating whether the label includes the required marker
  public $required;


  //
  // CONSTRUCTORS
  //

  /**
   * Create a new component instance.
   */
  public function __construct($text = "", $required = false)
  {
    $this->text = $text;
    $this->required = $required;
  }


  //
  // METHODS
  //

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
    return view('components.form.label');
  }
}
