<?php

namespace App\Livewire;

use App\Models\BlogPost;
use Livewire\Component;

class RecomendedBlogPosts extends Component
{
    public function render()
    {
        $posts = BlogPost::query()->orderBy('created_at', 'desc')->take(3)->get();
        return view('livewire.recomended-blog-posts', ['posts' => $posts]);
    }
}
