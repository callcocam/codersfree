<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InstructorLayout extends Component
{

    protected $data;
     /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data=null)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('layouts.instructor')->with('data', $this->data);
    }
}
