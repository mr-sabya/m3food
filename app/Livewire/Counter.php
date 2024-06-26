<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Counter extends Component
{
    
    public $count = 1;
    public $title = "Counter";
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }

    #[Title('Create Post')] 
    public function render()
    {
        return view('livewire.counter');
    }
}
