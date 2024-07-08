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
    public $page = "Product", $product, $product_id, $category = array(), $uploadImage = false, $getCategory;
    public $name, $slug, $image, $heading, $tag_line_1, $tag_line_2, $video, $benifit_title, $benifit_image, $para_1, $para_2, $use_title, $use_text, $warning_title, $warning_text, $facility_title;


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



    public function mount($id)
    {
        $product = Product::with('categories')->find($id);
        $this->product = $product;
        $this->product_id = $product->id;

        // $this->category = $product->categories()->pluck('id')->toArray();

        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->heading = $product->heading;
        $this->tag_line_1 = $product->tag_line_1;
        $this->tag_line_2 = $product->tag_line_2;
        $this->video = $product->video;
        $this->benifit_title = $product->benifit_title;
        $this->para_1 = $product->para_1;
        $this->para_2 = $product->para_2;
        $this->use_title = $product->use_title;
        $this->use_text = $product->use_text;
        $this->warning_title = $product->warning_title;
        $this->warning_text = $product->warning_text;
        $this->facility_title = $product->facility_title;
    }


    public function update()
    {
        dd($this->category);

        $product = Product::find($this->product_id);

        if ($product->slug == $this->slug) {
            $this->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
                'heading' => 'required|string|max:255',
                'tag_line_1' => 'required|string|max:500',
                'tag_line_2' => 'required|string|max:500',
                'video' => 'nullable|string|max:255',
                'benifit_title' => 'nullable|string|max:255',
                'benifit_image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
                'para_1' => 'nullable|string|max:255',
                'para_2' => 'nullable|string|max:255',
                'use_title' => 'nullable|string|max:255',

                'warning_title' => 'nullable|string|max:255',
                'facility_title' => 'nullable|string|max:255',
            ]);
        } else {
            $this->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:products',
                'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
                'heading' => 'required|string|max:255',
                'tag_line_1' => 'required|string|max:500',
                'tag_line_2' => 'required|string|max:500',
                'video' => 'nullable|string|max:255',
                'benifit_title' => 'nullable|string|max:255',
                'benifit_image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
                'para_1' => 'nullable|string|max:255',
                'para_2' => 'nullable|string|max:255',
                'use_title' => 'nullable|string|max:255',

                'warning_title' => 'nullable|string|max:255',
                'facility_title' => 'nullable|string|max:255',
            ]);
        }


        try {


            if ($this->image) {
                $image_name = md5($this->image . microtime()) . '.' . $this->image->extension();
                $image_url = "images/products";
                $this->image->storeAs($image_url, $image_name);
                $file_name = $image_url . '/' . $image_name;
            } else {
                $file_name = $this->product['image'];
            }

            if ($this->benifit_image) {
                $benifit_image_name = md5($this->benifit_image . microtime()) . '.' . $this->benifit_image->extension();
                $benifit_image_url = "images/products";
                $this->benifit_image->storeAs($benifit_image_url, $benifit_image_name);
                $benifit_image_file_name = $benifit_image_url . '/' . $benifit_image_name;
            } else {
                $benifit_image_file_name = $this->product['benifit_image'];
            }


            $product->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'image' => $file_name,

                'heading' => $this->heading,
                'tag_line_1' => $this->tag_line_1,
                'tag_line_2' => $this->tag_line_2,
                'video' => $this->video,
                'benifit_title' => $this->benifit_title,
                'benifit_image' => $benifit_image_file_name,
                'para_1' => $this->para_1,
                'para_2' => $this->para_2,
                'use_title' => $this->use_title,
                'use_text' => $this->use_title,
                'warning_title' => $this->warning_title,
                'warning_text' => $this->warning_text,
                'facility_title' => $this->facility_title,
            ]);

            $product->categories()->sync($this->category);

            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been updated successfully!']);

            return $this->redirect(route('admin.product.index'), navigate: true);
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
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
