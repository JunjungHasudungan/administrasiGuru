<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Majors extends Component
{
    public $isModal;

    public function render()
    {
        return view('livewire.majors');
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function resetModal()
    {
        
    }

    public function openModal()
    {
        $this->isModal = true;
    }
}
