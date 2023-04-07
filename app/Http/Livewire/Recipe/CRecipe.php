<?php

namespace App\Http\Livewire\Recipe;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CRecipe extends Component
{
    use WithFileUploads;

    public $user, $title, $materials, $short_description, $description, $image;
    public $view_count = 1;
    public $categories;
    public $categoryId = 1;

    public function mount()
    {
        $this->user = Auth::id();
        $this->categories = Category::all();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $rules = [
        "title" => "required | min:3",
        "short_description" => "required | min:12",
        "description" => "required | min:56",
        "materials" => "required | string",
        "image" => "nullable | image | mimes:jpeg,png,jpg,gif,svg | max:2048",
        "view_count" => "nullable",
    ];

    public function store()
    {
        $this->validate([
            "title" => "required | min:3",
            "short_description" => "required | min:12",
            "description" => "required | min:56",
            "materials" => "required | string",
            "image" => "nullable | image | mimes:jpeg,png,jpg,gif,svg | max:2048",
            "view_count" => "nullable",
        ]);

        $image = $this->image->store('public/photos');
        $recipe = new Recipe;
        $recipe->user_id = Auth::id();
        $recipe->title = $this->title;
        $recipe->short_description = $this->short_description;
        $recipe->materials = $this->materials;
        $recipe->description = $this->description;
        $recipe->image = "/storage/photos/" . explode("/", $image)[2];
        $recipe->view_count = 1;
        $recipe->category_id = $this->categoryId;
        $recipe->save();

        $this->reset("title", "short_description", "materials", "description", "image");
        $this->emit('showAlert', "Your Recipe Created Successfully!");
    }

    public function render()
    {
        return view('livewire.recipe.c-recipe');
    }
}
