<?php

namespace App\Http\Livewire;

use App\Models\Role as RoleModel;
use Livewire\Component;

class Role extends Component
{
    public $name;
    public $isModal;
    public $roles;
    

    public function render()
    {
        $this->roles = RoleModel::orderBy('name', 'DESC')->get();

        dd($this->roles);
        return view('livewire.role');
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function resetField()
    {
        $this->name = '';
    }

    public function create()
    {
        $this->openModal();

        $this->resetField();
    }
}
