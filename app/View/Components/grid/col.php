<?php

namespace App\View\Components\grid;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class col extends Component
{
    //
    // PARAMETERS
    //

    // Size of the column
    public $size;

    // Size of the column for small screens 
    public $sm;

    //
    public $md;

    //
    public $lg;

    //
    public $xl;

    //
    public $colsm;

    //
    public $colmd;

    //
    public $collg;

    //
    public $colxl;

    //
    public $colauto;

    //
    public $colsmauto;

    //
    public $colmdauto;

    //
    public $collgauto;

    //
    public $colxlauto;


    //
    // CONSTRUCTORS
    //

    /**
     * Create a new component instance.
     */
    public function __construct($size = 0, $sm = 0, $md = 0, $lg = 0, $xl = 0, 
                                $colsm = false, $colmd = false, $collg = false, $colxl = false,
                                $colauto = false, $colsmauto = false, $colmdauto = false, $collgauto = false, $colxlauto = false)
    {
        //
        $this->size = ($size > 12 || $size < 0) ? 0 : $size;
        $this->sm = ($sm > 12 || $sm < 0 || $colsm) ? 0 : $sm;
        $this->md = ($md > 12 || $md < 0 || $colmd) ? 0 : $md;
        $this->lg = ($lg > 12 || $lg < 0 || $collg) ? 0 : $lg;
        $this->xl = ($xl > 12 || $xl < 0 || $colxl) ? 0 : $xl;
        $this->colsm = $colsm;
        $this->colmd = $colmd;
        $this->collg = $collg;
        $this->colxl = $colxl;
        $this->colauto = $colauto;
        $this->colsmauto = $colsmauto;
        $this->colmdauto = $colmdauto;
        $this->collgauto = $collgauto;
        $this->colxlauto = $colxlauto;
    }


    //
    // METHODS
    //

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.grid.col');
    }
}
