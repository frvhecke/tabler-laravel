<?php

namespace App\View\Components\form;

use Closure;
use App\View\Components\form\checkbox;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class toggle extends checkbox
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.toggle');
    }
}
