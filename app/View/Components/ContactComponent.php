<?php

namespace App\View\Components;

use App\Models\About;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactComponent extends Component
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
        return view('components.contact-component');
    }
}
