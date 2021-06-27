<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Pcategory;

class Navbar2 extends Component
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
        $pcats                   = Pcategory::select('id', 'title', 'image')->get();
        return view('components.navbar2', [
          'pcats'=>$pcats,
        ]);
    }
}
