<?php

namespace App\Livewire\Backend;

use App\Models\Tag as ModelsTag;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Tag extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $page = "Tag", $addData = true, $updateData = false;
    // page field
    public $name, $slug, $tagId, $tag, $search = "";

    /**
     * generate slug
     * @return void
     */
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }


    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->name = '';
        $this->slug = '';
    }


    /**
     * Open Add Post form
     * @return void
     */
    public function create()
    {
        $this->resetFields();
        $this->addData = true;
        $this->updateData = false;
    }




    /**
     * store the user inputted post data in the posts table
     * @return void
     */
    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:tags',
        ]);

        try {

            ModelsTag::create([
                'name' => $this->name,
                'slug' => $this->slug,
            ]);

            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page.' has been added successfully!']);
            
            $this->resetFields();
            $this->addData = false;
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }


    /**
     * show existing post data in edit post form
     * @param mixed $id
     * @return void
     */
    public function edit($id)
    {
        try {
            $tag = ModelsTag::findOrFail($id);
            $this->tag = $tag;

            $this->name = $tag->name;
            $this->slug = $tag->slug;
            $this->tagId = $tag->id;

            $this->updateData = true;
            $this->addData = false;
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }



    /**
     * update the post data
     * @return void
     */
    public function update()
    {
        $tag = ModelsTag::find($this->tagId);
        if ($tag->slug == $this->slug) {
            $this->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
            ]);
        } else {
            $this->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:tags',
            ]);
        }


        try {

            $tag->update([
                'name' => $this->name,
                'slug' => $this->slug,
            ]);

            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page.' has been updated successfully!']);

            $this->resetFields();
            $this->updateData = false;
            $this->addData = true;
            
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }


    /**
     * delete specific post data from the posts table
     * @param mixed $id
     * @return void
     */
    public function delete($id)
    {
        try {
            $tag = ModelsTag::find($id);
            $tag->delete();
            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page.' has been deleted successfully!']);
        } catch (\Exception $e) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }

    public function render()
    {
        return view(
            'livewire.backend.tag',
            [
                'tags' => ModelsTag::search('name', $this->search)->latest()->paginate(12),
            ]
        );
    }
}
