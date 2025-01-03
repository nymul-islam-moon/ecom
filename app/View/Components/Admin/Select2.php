<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select2 extends Component
{
    public $id;

    public $name;

    public $placeholder;

    public $route;

    public $dependsOn;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $name, $placeholder, $route, $dependsOn = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->route = $route;
        $this->dependsOn = $dependsOn;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.select2');
    }
}
