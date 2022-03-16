<?php

namespace App\Http\Livewire\Admin;

use App\Models\BlogPost;
use Livewire\Component;

class BlogPostForm extends Component
{

    public BlogPost $post;

    public function mount($id)
    {
        $this->post = BlogPost::find($id);
    }

    public function render()
    {
        return view('livewire.admin.blog-post-form');
    }
}
