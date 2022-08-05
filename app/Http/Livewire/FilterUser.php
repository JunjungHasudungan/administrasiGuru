<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class FilterUser extends Component
{

    public $teachers;
    public $students;


    public function students()
    {
        return $this->students = User::where('role_id', 2)->latest()->paginate(5);
    }

    public function teachers()
    {
        // return $this->teachers = ;
    }
    public function render()
    {
        dd($this->students());

        return view('livewire.filter-user');
    }


}
