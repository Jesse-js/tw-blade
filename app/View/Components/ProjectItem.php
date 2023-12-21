<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectItem extends Component
{
    public string $image;
    public int $index;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $image, int $index)
    {
        $this->image = $image;
        $this->index = $index;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project-item');
    }
}
