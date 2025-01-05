<?php

namespace App\Livewire\Backend\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $page = "Product", $product, $product_id, $uploadImage = false, $uploadThumbnail = false, $getCategory;
    public $name, $slug, $category_id, $title, $image, $thumbnail, $tagline, $details, $is_trending, $is_new;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    /**
     * Active image upload and preview
     * @return void
     */
    public function activeImageUpload()
    {
        $this->uploadImage = true;
    }

    /**
     * Active image upload and preview
     * @return void
     */
    public function activeThumbnailUpload()
    {
        $this->uploadThumbnail = true;
    }

    public function mount($id)
    {
        $product = Product::with('categories')->find($id);
        $this->product = $product;
        $this->product_id = $product->id;

        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->category_id = $product->category_id;
        $this->title = $product->title;
        $this->tagline = $product->tagline;
        $this->details = $product->details;

        if($product->is_trending == 1){
            $this->is_trending = true;
        }
        if($product->is_new == 1){
            $this->is_new = true;
        }
    }

    public function update()
    {


        $validationRules = [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $this->product_id,
            'category_id' => 'required',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'thumbnail' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'tagline' => 'nullable|string|max:500',
            'details' => 'nullable|string',
        ];

        $this->validate($validationRules);

        try {
            // Handle image upload
            $file_name = $this->image
                ? $this->uploadFile($this->image, 'images/products')
                : $this->product->image;

            // Handle thumbnail upload
            $thumbnail_name = $this->thumbnail
                ? $this->uploadFile($this->thumbnail, 'images/products')
                : $this->product->thumbnail;

            $product = Product::find($this->product_id);
            $product->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'category_id' => $this->category_id,
                'title' => $this->title,
                'image' => $file_name,
                'thumbnail' => $thumbnail_name,
                'tagline' => $this->tagline,
                'details' => $this->details,
                'is_trending' => $this->is_trending ? 1 : 0,
                'is_new' => $this->is_new ? 1 : 0,
            ]);


            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been updated successfully!']);

            // return $this->redirect(route('admin.product.index'), navigate: true);
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error', 'message' => 'Something went wrong!']);
        }
    }

    private function uploadFile($file, $path)
    {
        $file_name = md5($file . microtime()) . '.' . $file->extension();
        $file->storeAs($path, $file_name);
        return $path . '/' . $file_name;
    }

    public function render()
    {
        return view(
            'livewire.backend.product.edit',
            [
                'categories' => Category::latest()->get(),
            ]
        );
    }
}
