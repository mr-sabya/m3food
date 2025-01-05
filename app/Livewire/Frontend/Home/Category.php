<?php

namespace App\Livewire\Frontend\Home;

use App\Models\Category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{
    public function render()
    {
        return view('livewire.frontend.home.category',[
            'categories' => ModelsCategory::orderBy('name', 'ASC')->get(),
        ]);
    }
}
