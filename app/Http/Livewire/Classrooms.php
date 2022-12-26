<?php

namespace App\Http\Livewire;

use App\Models\Classroom;
use Livewire\Component;

class Classrooms extends Component
{
    public $classrooms, $classroom, $subjects, $subject;

    public function mount()
    {
        $this->classrooms = Classroom::all();
    }

    public function render()
    {
        return view('livewire.classrooms', $this->classrooms);
    }
}
