<?php

namespace App\Livewire\Backend\Product;

use App\Models\Product;
use Livewire\Component;

class Show extends Component
{
    public $product;

    public function mount($id)
    {
        $product = Product::find(intval($id));

        if (!$product) {
            return $this->redirect(route('admin.error.404'), navigate: true);
        }
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.backend.product.show');
    }
}
