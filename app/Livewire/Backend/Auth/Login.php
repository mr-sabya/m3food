<?php

namespace App\Livewire\Backend\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    public function submit(Request $request)
    {
        $validator = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // $request->authenticate();

            if(Auth::user()->isAdmin()){
                return redirect(route('admin.dashboard'));
            }else{
                session()->flash('error', 'You don not have permission to this page');
            }

            // return "ok";
        } else {
            session()->flash('error', 'Email or password does not match');
        }
    }


    public function render()
    {
        return view('livewire.backend.auth.login');
    }
}
