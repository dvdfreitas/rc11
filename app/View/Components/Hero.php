<?php

namespace App\View\Components;

use App\Models\Hero as ModelsHero;
use Illuminate\View\Component;

class Hero extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $heroes = ModelsHero::all();
        return view('components.hero', ['heroes' => $heroes]);
    }
}
