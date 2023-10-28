<?php


namespace App\Livewire\Blog;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.blog.posts', [
            'posts' => Post::where('is_published', true)
                ->latest()
                ->paginate(2)
        ]);
    }
}
