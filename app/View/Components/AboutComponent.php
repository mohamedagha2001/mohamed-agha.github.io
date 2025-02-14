<?php

namespace App\View\Components;

use App\Models\About;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AboutComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $about;
    public function __construct()
    {
        $this->about=About::find(1);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about-component');
    }
}
