<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;
    public $policy = false;

    public function handleRegister()
    {
        $this->validate([
            "name" => "required | min:3",
            "email" => "required | email | unique:users",
            "password" => "required | confirmed | min:6 | regex:/^[a-zA-Z0-9@#$%^&*!]+$/u",
            "policy" => "required | accepted"
        ]);

        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->utype = "USR";
        $user->image = "https://picsum.photos/200/300";
        $user->save();

        $id = $user->id;
        Auth::loginUsingId($id);

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}