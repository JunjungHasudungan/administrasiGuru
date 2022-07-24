<?php

namespace App\Http\Livewire\Post;

use App\Http\Livewire\Post as Posts;
use Livewire\Component;

class Post extends Component
{
    // deklarasi variable global
    public $posts;

    public function render()
    {
        $posts = Posts::orderBy('title', 'asc')->get();

        dd($posts);

        return view('livewire.posts.index');
    }
}
