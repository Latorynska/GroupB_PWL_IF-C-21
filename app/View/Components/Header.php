<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Closure;

class Header extends Component
{
    /**
     * Get the view / contents that represents the component.
     */

    //  public $navbar; 
    //  public function __construct($navbar)
    //  {
        //  $this->navbar = $navbar;
    //  }
    
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
