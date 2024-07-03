<?php

namespace App\Livewire\Backend\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    
    public $email; 
    public $password; 

    public function submit()
    {
        $validator = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password])){
            return redirect(route('admin.dashboard'));
            // return "ok";
        }else{
            session()->flash('error', 'Email or password does not match');
        }
    }


    public function render()
    {
        return view('livewire.backend.auth.login');
    }
}
