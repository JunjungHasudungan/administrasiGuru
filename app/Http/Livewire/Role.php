<?php

namespace App\Http\Livewire;

use App\Models\Role as RoleModel;
use Livewire\Component;

class Role extends Component
{
    public $name, $roles;
    public $count = 0;
    

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        $this->roles = RoleModel::orderBy('name', 'DESC')->get();

        dd($this->roles);
        return view('livewire.role');
    }

    public function openModal()
    {
        $this->is_modal = true;
    }

    public function closeModal()
    {
        $this->is_modal = false;
    }

    public function resetField()
    {
        $this->name = '';
    }

    public function create()
    {
        // $this->openModal();

        $this->resetField();
    }
}
