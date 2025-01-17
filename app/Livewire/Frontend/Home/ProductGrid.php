<?php

namespace App\Livewire\Frontend\Home;

use App\Models\Product;
use Livewire\Component;

class ProductGrid extends Component
{
    public $class_name;

    public function mount($class_name = "")
    {
        $this->class_name = $class_name;
    }

    public function render()
    {
        return view('livewire.frontend.home.product-grid',[
            'products' => Product::orderBy('id', 'DESC')->get(),
        ]);
    }
}
