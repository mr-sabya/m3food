<?php

namespace App\Livewire\Backend\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin.login'));
    }
    
    public function render()
    {
        return view('livewire.backend.auth.logout');
    }
}
