<?php

namespace App\Livewire;

use App\Models\BlogPost;
use Livewire\Component;

class BlogPosts extends Component
{
    public string $category = '';
    public function select_category($category)
    {
        $this->category = $category;
    }

    public function render()
    {
        $posts = BlogPost::query()->where('category','like', '%'.$this->category.'%')->get();
        return view('livewire.blog-posts', compact('posts'));
    }
}
