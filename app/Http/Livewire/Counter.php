<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count;

    public function increments()
    {
        $this->count++;
    }

    public function render()
    {
        
        return view('livewire.counter');
    }
}
