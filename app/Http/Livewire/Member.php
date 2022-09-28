<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Member as ModelMember;
class Member extends Component
{
    // deklarasi variable / properthies
    public $isModal = 0;

    public $name, $phone_number, $email, $status, $member_id, $members;

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function resetField()
    {
        $this->name = '';
        $this->email = '';
        $this->status = '';
        $this->phone_number = '';
    }   

    public function create()
    {
        $this->openModal();

        $this->resetField();
    }

    public function store()
    {
        $this->validate([
            'name'          =>  'required|string',
            'email' => 'required|email|unique:members,email,' . $this->member_id,
            'phone_number' => 'required|numeric',
            'status' => 'required'
        ]);

        ModelMember::updateOrCreate(['id' => $this->member_id], [
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'status' => $this->status,
        ]);

        // membuat notifikasi
        session()->flash('message', $this->member_id ? $this->name . 'Diperbaharui' : $this->name . 'Ditambahkan');
        $this->resetField();
        
        $this->closeModal();

    }

    public function render()
    {
        $this->members = ModelMember::orderBy('created_at', 'DESC')->get();
        // dd($this->members);

        return view('livewire.members.index');
        // return view('livewire.member');
    }
}
