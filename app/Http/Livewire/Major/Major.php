<?php

namespace App\Http\Livewire\Major;

use Livewire\Component;
use App\Models\Major as Majors;

class Major extends Component
{
    public function render()
    {
        $majors = Majors::all();
        dd($majors);
        // return view('livewire.major.index');
    }
}
