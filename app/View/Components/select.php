<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class select extends Component
{
    /**
     * Create a new component instance.
     */

     public $name;
     public $label;
     public $options;
    public function __construct($name , $label, $options=[])
    {
        $this -> name = $name;
        $this -> label = $label;
        $this->options = is_array($options) ? $options : [];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select');
    }
}
