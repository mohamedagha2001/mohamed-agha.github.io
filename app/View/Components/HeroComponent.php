<?php

namespace App\View\Components;

use Closure;
use App\Models\About;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class HeroComponent extends Component
{
    /**
     * Create a new component instance.
     */
        public $about;
    public function __construct()
    {
        $this->about=About::findorfail(1);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-component');
    }
}
