<?php

namespace App\Livewire\Backend\Category;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $name, $slug, $image;


    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function addCategory()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories',
        ]);
    }


    public function render()
    {
        return view('livewire.backend.category.create');
    }
}
