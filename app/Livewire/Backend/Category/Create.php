<?php

namespace App\Livewire\Backend\Category;

use App\Models\Category;
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

        $image_name = md5($this->image . microtime()).'.'.$this->image->extension();
        $image_url = "images/categories";
        $this->image->storeAs($image_url, $image_name);
        $file_name = $image_url.'/'.$image_name;

        Category::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $file_name,
        ]);
        session()->flash('success', 'Category has been added successfully');
        return $this->redirect(route('admin.category.index'), navigate:true);

    }


    public function render()
    {
        return view('livewire.backend.category.create');
    }
}
