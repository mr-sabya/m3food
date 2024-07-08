<?php

namespace App\Livewire\Backend\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $page = "Product";

    public function render()
    {
        return view('livewire.backend.product.index',[
            'products' => Product::latest()->paginate(1),
        ]);
    }
}
