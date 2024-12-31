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
    public $category = [];
    public $name, $slug, $title, $image, $thumbnail, $tagline, $details;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function store()
    {
        $categories = [];
        foreach($this->category as $key => $data) {
            if ($data == true) {
                array_push($categories, $key);
            }
        }

        // Validate the fields
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products',
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'tagline' => 'nullable|string|max:500',
            'details' => 'nullable|string',
        ]);

        try {
            // Handle thumbnail upload
            if ($this->thumbnail) {
                $thumbnail_name = md5($this->thumbnail . microtime()) . '.' . $this->thumbnail->extension();
                $thumbnail_url = "images/products";
                $this->thumbnail->storeAs($thumbnail_url, $thumbnail_name);
                $thumbnail_file_name = $thumbnail_url . '/' . $thumbnail_name;
            } else {
                $thumbnail_file_name = null;
            }

            // Handle image upload
            if ($this->image) {
                $image_name = md5($this->image . microtime()) . '.' . $this->image->extension();
                $image_url = "images/products";
                $this->image->storeAs($image_url, $image_name);
                $image_file_name = $image_url . '/' . $image_name;
            } else {
                $image_file_name = null;
            }

            // Create the product
            $product = Product::create([
                'name' => $this->name,
                'slug' => $this->slug,
                'title' => $this->title,
                'image' => $image_file_name,
                'thumbnail' => $thumbnail_file_name,
                'tagline' => $this->tagline,
                'details' => $this->details,
            ]);

            // Attach selected categories to the product
            $product->categories()->attach($categories);

            // Dispatch a success message
            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been added successfully!']);

            return $this->redirect(route('admin.product.index'), navigate: true);
        } catch (\Exception $ex) {
            // Dispatch an error message if something goes wrong
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
