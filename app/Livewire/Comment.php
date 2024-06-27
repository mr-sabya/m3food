<?php

namespace App\Livewire;

use App\Models\Comment as ModelsComment;
use Livewire\Component;
use Livewire\WithPagination;

class Comment extends Component
{
    use WithPagination;
    public $body;

    public function mount()
    {
        
    }

    public function addComment()
    {
        $this->validate([
            'body' => 'required',
        ],[
            'body.required' => 'Please add some text to comment',
        ]);

        $comment = ModelsComment::create([
            'body' => $this->body,
            'user_id' => 1
        ]);
        
        $this->body = "";
    }

    public function remove($id)
    {
        $comment = ModelsComment::find($id);
        $comment->delete();
    }


    public function render()
    {
        return view('livewire.comment', [
           'comments' => ModelsComment::latest()->paginate(5),
        ]);
    }
}
