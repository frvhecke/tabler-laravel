<?php

namespace App\View\Components\form;

use Closure;
use App\View\Components\form\text;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class password extends text
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.password');
    }
}
