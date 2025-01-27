<?php

namespace App\View\Components\button;

use Closure;
use App\View\Components\button\standard;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class pill extends standard
{
    //
    // METHODS
    //

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.pill');
    }
}
