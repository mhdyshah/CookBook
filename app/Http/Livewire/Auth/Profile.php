<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;
    public $name, $email, $password, $image, $user;

    public function mount()
    {
        $this->user = User::where("id", Auth::id())->get();
        $this->name = $this->user[0]["name"];
        $this->email = $this->user[0]["email"];
        $this->password = $this->user[0]["password"];
        $this->image = $this->user[0]["image"];
    }

    public function editProfile()
    {
        $this->validate([
            "name" => "required | min:3 | string",
            "image" => "nullable | image | mimes:jpeg,png,jpg,gif,svg | max:4096",
        ]);

        $result = User::where("id", Auth::id());
        $mhImage = $this->image->store('public/photos');
        $result->update([
            'name' => $this->name,
            'image' => "/storage/photos/" . explode("/", $mhImage)[2],
        ]);
        $this->emit('showAlert', "Your Profile Updated Successfully!");
        redirect()->to('/profile');
    }


    public function render()
    {
        return view('livewire.auth.profile');
    }
}
