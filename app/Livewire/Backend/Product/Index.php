<?php

namespace App\Livewire\Backend\Product;

use Livewire\Component;

class Index extends Component
{
    public $page = "Product";

    public function render()
    {
        return view('livewire.backend.product.index');
    }
}
