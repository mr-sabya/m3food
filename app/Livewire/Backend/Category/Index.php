<?php

namespace App\Livewire\Backend\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination; 

    public function remove($categoryId)
    {
        $category = Category::find($categoryId);
        Storage::disk('public')->delete($category->image);
        $category->delete();
        session()->flash('success', 'Category deleted successfully 😊');
    }
    
    public function render()
    {
        return view('livewire.backend.category.index', [
            'categories' => Category::latest()->paginate(9),
        ]);
    }
}
