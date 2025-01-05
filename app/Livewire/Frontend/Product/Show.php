<?php

namespace App\Livewire\Frontend\Product;

use App\Models\Product;
use Livewire\Component;

class Show extends Component
{
    public $productId;

    public function mount($productId) 
    {
        $this->productId =  $productId;
    }

    public function render()
    {
        return view('livewire.frontend.product.show', [
            'product' => Product::find($this->productId),
        ]);
    }
}
