<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function showLoginForm()
    {
        if(Auth::check()){
            return redirect(route('admin.dashboard'));
        }
        return view('backend.auth.login');
    }
}
