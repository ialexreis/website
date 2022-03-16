<?php

namespace App\Http\Livewire\Admin;

use App\Enums\Status;
use App\Models\BlogPost;
use App\Models\HomeSetting;
use Livewire\Component;

class BlogPosts extends Component
{

    public $posts;

    public function __construct()
    {
        $this->posts = BlogPost::all();
    }

    public function render()
    {
        return view('livewire.admin.blog-posts');
    }
}
