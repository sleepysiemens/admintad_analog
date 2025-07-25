<?php

namespace App\Livewire;

use App\Models\BlogPost;
use Illuminate\View\View;
use Livewire\Component;

class RecomendedBlogPosts extends Component
{
    public function render(): View
    {
        $posts = BlogPost::query()->orderBy('created_at', 'desc')->take(3)->get();

        return view('livewire.recomended-blog-posts', ['posts' => $posts]);
    }
}
