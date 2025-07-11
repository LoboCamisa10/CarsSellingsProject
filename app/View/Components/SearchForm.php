<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SearchForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct( 
        public string $action ='/search',
        public string $method ='GET'
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.search-form');
    }

    public function teste(){
        return 'Something';
    }
}
