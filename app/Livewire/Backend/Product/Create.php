<?php

namespace App\Livewire\Backend\Product;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $page = "Product", $name, $slug, $image;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }


    
    public function render()
    {
        return view('livewire.backend.product.create');
    }
}
