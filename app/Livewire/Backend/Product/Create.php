<?php

namespace App\Livewire\Backend\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    // 'name', 'slug', 'image', 'heading', 'tag_line_1', 'tag_line_2', 'video', 'benifit_title', 'benifit_image', 'para_1', 'para_2', 'use_title', 'use_text', 'warning_title', 'warning_text', 'facility_title'


    use WithFileUploads;
    public $page = "Product", $category = array();
    public $name, $slug, $image, $heading, $tag_line_1, $tag_line_2, $video, $benifit_title, $benifit_image, $para_1, $para_2, $use_title, $use_text, $warning_title, $warning_text, $facility_title;


    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function store()
    {
        $categories = [];
        foreach($this->category as $key => $data){
            if($data== true){
                array_push($categories, $key);
            }
        }


        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
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

        try {


            if ($this->image) {
                $image_name = md5($this->image . microtime()) . '.' . $this->image->extension();
                $image_url = "images/products";
                $this->image->storeAs($image_url, $image_name);
                $file_name = $image_url . '/' . $image_name;
            } else {
                $file_name = NULL;
            }

            if ($this->benifit_image) {
                $benifit_image_name = md5($this->benifit_image . microtime()) . '.' . $this->benifit_image->extension();
                $benifit_image_url = "images/products";
                $this->benifit_image->storeAs($benifit_image_url, $benifit_image_name);
                $benifit_image_file_name = $benifit_image_url . '/' . $benifit_image_name;
            } else {
                $benifit_image_file_name = NULL;
            }


            $product = Product::create([
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

            $product->categories()->attach($categories);

            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been added successfully!']);

            return $this->redirect(route('admin.product.index'), navigate: true);
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }



    public function render()
    {
        return view('livewire.backend.product.create', [
            'categories' => Category::latest()->get(),
        ]);
    }
}
