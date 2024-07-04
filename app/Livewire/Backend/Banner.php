<?php

namespace App\Livewire\Backend;

use App\Models\Banner as ModelsBanner;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Banner extends Component
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    public $page = "Banner", $name, $image, $bannerId, $uploadImage = true, $banner, $addBanner = true, $updateBaner = false;


    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->name = '';
        $this->image = '';
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
     * store the user inputted post data in the posts table
     * @return void
     */
    public function storeBanner()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        try {

            if ($this->image) {
                $image_name = md5($this->image . microtime()) . '.' . $this->image->extension();
                $image_url = "images/banners";
                $this->image->storeAs($image_url, $image_name);
                $file_name = $image_url . '/' . $image_name;
            } else {
                $file_name  = NULL;
            }
            ModelsBanner::create([
                'name' => $this->name,
                'image' => $file_name,
            ]);
            session()->flash('success', 'Post Created Successfully!!');
            $this->resetFields();
            $this->addBanner = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }


    /**
     * show existing post data in edit post form
     * @param mixed $id
     * @return void
     */
    public function editBanner($id)
    {
        try {
            $banner = ModelsBanner::findOrFail($id);
            $this->banner = $banner;
            if (!$banner) {
                session()->flash('error', 'banner not found');
            } else {
                $this->name = $banner->name;
                $this->bannerId = $banner->id;
                $this->updateBaner = true;
                $this->addBanner = false;
                $this->uploadImage = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }



    /**
     * update the post data
     * @return void
     */
    public function updateBanner()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        try {

            if ($this->image) {
                $image_name = md5($this->image . microtime()) . '.' . $this->image->extension();
                $image_url = "images/banners";
                $this->image->storeAs($image_url, $image_name);
                $file_name = $image_url . '/' . $image_name;
            } else {
                $file_name  = $this->banner['image'];
            }


            ModelsBanner::whereId($this->bannerId)->update([
                'name' => $this->name,
                'image' => $file_name
            ]);
            session()->flash('success', 'Post Updated Successfully!!');

            $this->resetFields();
            $this->updateBaner = false;
            $this->addBanner = true;
            $this->uploadImage = true;

        
        } catch (\Exception $ex) {
            session()->flash('success', 'Something goes wrong!!');
        }
    }


    /**
     * delete specific post data from the posts table
     * @param mixed $id
     * @return void
     */
    public function delete($id)
    {
        try{
            $banner = ModelsBanner::find($id);
            Storage::disk('public')->delete($banner->image);
            $banner->delete();
            session()->flash('success',"Banner has been Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }



    public function render()
    {
        return view('livewire.backend.banner', [
            'banners' => ModelsBanner::latest()->paginate(6),
        ]);
    }
}
