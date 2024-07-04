<?php

namespace App\Livewire\Backend\Category;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $category, $category_id, $name, $slug, $image, $uploadImage = false;


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
        $category = Category::find($id);
        $this->category = $category;
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
    }

    /**
     * update the post data
     * @return void
     */
    public function updateCategory()
    {
        $category = Category::find($this->category_id);

        if($category->slug == $this->slug){
            $this->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
            ]);
        }else{
            $this->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:categories',
            ]);
        }
        
        
        if($this->image){
            $image_name = md5($this->image . microtime()).'.'.$this->image->extension();
            $image_url = "images/categories";
            $this->image->storeAs($image_url, $image_name);
            $file_name = $image_url.'/'.$image_name;
        }else{
            $file_name = $this->category['image'];
        }
        

        $category->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $file_name,
        ]);
        session()->flash('success', 'Category has been updated successfully');
        return $this->redirect(route('admin.category.index'), navigate:true);

    }


    public function render()
    {
        return view('livewire.backend.category.edit');
    }
}
