<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class SendQuestion extends Component
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
        return view('components.send-question');
    }

    public function submitForm(Request $request){
        // dd($request->all());
    }
}
