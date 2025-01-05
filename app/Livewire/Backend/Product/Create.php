<?php

namespace App\Livewire\Backend\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $page = "Product";
    public $name, $slug, $category_id, $title, $image, $thumbnail, $tagline, $details, $is_trending, $is_new;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products',
            'category_id' => 'required',
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'tagline' => 'nullable|string|max:500',
            'details' => 'nullable|string',
        ]);

        try {
            $thumbnail = $this->thumbnail
                ? $this->thumbnail->storeAs('images/products', md5($this->thumbnail . microtime()) . '.' . $this->thumbnail->extension())
                : null;

            $image = $this->image
                ? $this->image->storeAs('images/products', md5($this->image . microtime()) . '.' . $this->image->extension())
                : null;

            Product::create([
                'name' => $this->name,
                'slug' => $this->slug,
                'category_id' => $this->category_id,
                'title' => $this->title,
                'thumbnail' => $thumbnail,
                'image' => $image,
                'tagline' => $this->tagline,
                'details' => $this->details,
                'is_trending' => $this->is_trending ? 1 : 0,
                'is_new' => $this->is_new ? 1 : 0,
            ]);

            $this->dispatch('alert', ['type' => 'success', 'message' => $this->page . ' has been added successfully!']);
            return $this->redirect(route('admin.product.index'), navigate: true);
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error', 'message' => 'Something went wrong!']);
        }
    }


    public function render()
    {
        return view('livewire.backend.product.create', [
            'categories' => Category::latest()->get(),
        ]);
    }
}
