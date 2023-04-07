<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;
    public $remember = false;

    public function handleLogin()
    {
        $this->validate([
            "email" => "required | email",
            "password" => "required | min:6 | regex:/^[a-zA-Z0-9@#$%^&*!]+$/u",
        ]);

        if (Auth::attempt([
            "email" => $this->email,
            "password" => $this->password
        ], $this->remember)) {
            return redirect()->to('/');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}