<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $placeholder;
    public $type;

    public function __construct($name, $placeholder, $type)
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->type = $type;
    }

   
    public function render()
    {
        return view('components.input');
    }
}
