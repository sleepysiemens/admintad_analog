<?php

namespace App\Livewire;

use App\Models\BlogPost;
use Illuminate\View\View;
use Livewire\Component;

class BlogPosts extends Component
{
    public string $category = '';
    public function select_category($category): void
    {
        $this->category = $category;
    }

    public function render(): View
    {
        $posts = BlogPost::query()->where('category','like', '%'.$this->category.'%')->get();
        return view('livewire.blog-posts', compact('posts'));
    }
}
