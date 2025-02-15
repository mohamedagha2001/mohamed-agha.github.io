<?php

namespace App\View\Components;

use App\Models\Skill;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SkillComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $skills;
    public function __construct()
    {
        $this->skills=Skill::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.skill-component');
    }
}
