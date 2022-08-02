<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class SearchUser extends Component
{

    public $search;
    public $users;


    protected $querySeacrh = [ 
        'search' => ['except' => ''] 
    ];

    public $imitPage = 5;


    protected $listeners = [

    ];

    public function render()
    {
        $users = User::latest()->paginate(5);
        // if($this->;){

        // }
        $searchUser = '%' . $this->search . '%';

        $this->users = User::where('name', 'like', '%'.  $this->search . '%')->latest()->paginate(5);

        return view('livewire.search-user');
    }
}
