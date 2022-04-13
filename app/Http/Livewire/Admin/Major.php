<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Major as Majors;

class Major extends Component
{

    public $majors, $majorCode, $name;
    
    public $isModalOpen = 0;

    public function render()
    {
        $majors  = Majors::all();
        return view('livewire.admin.major');
    }
}
