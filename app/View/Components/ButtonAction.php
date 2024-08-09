<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonAction extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-action');
    }

    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        return view('components.button-action');
    }
}

