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

    public $selectedId;

    public $selectedText;

    public $required;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $name, $placeholder, $route, $dependsOn = null, $selectedId = null, $selectedText = null, $required = false)
    {
        $this->id = $id;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->route = $route;
        $this->dependsOn = $dependsOn;
        $this->selectedId = old($name, $selectedId); // Retain old value after validation
        $this->selectedText = old($name) ? null : $selectedText; // Avoid overriding if validation failed
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.select2');
    }
}
