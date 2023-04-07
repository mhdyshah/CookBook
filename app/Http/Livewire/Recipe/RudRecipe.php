<?php

namespace App\Http\Livewire\Recipe;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class RudRecipe extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $recipes, $categoryId, $title, $materials, $short_description, $description, $image, $recipe_id;
    public $user;
    public $myRecipes;
    public $categories;
    public $updateMode = false;


    public function mount()
    {
        $this->user = Auth::id();
        $this->myRecipes = Recipe::where('user_id', Auth::id())->get();
        $this->categories = Category::all();
    }

    // deleting recipe
    public function delete($id)
    {
        Recipe::find($id)->delete();
        $this->emit('showAlert', "Your Recipe Deleted Successfully!");
        return redirect()->to('/recipe-detail');
    }

    // updating recipe
    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        $this->recipe_id = $id;
        $this->title = $recipe->title;
        $this->materials = $recipe->materials;
        $this->short_description = $recipe->short_description;
        $this->description = $recipe->description;
        $this->image = $recipe->image;
        $this->categoryId = $recipe->category_id;

        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->reset("title", "short_description", "materials", "description", "image");
    }

    public function update()
    {
        $this->validate([
            "title" => "required | min:3",
            "short_description" => "required | min:12",
            "description" => "required | min:56",
            "materials" => "required | string",
            "image" => "nullable | image | mimes:jpeg,png,jpg,gif,svg | max:2048",
        ]);

        $recipe = Recipe::find($this->recipe_id);
        $mhImage = $this->image->store('public/photos');
        $recipe->update([
            'title' => $this->title,
            'materials' => $this->materials,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'image' => "/storage/photos/" . explode("/", $mhImage)[2],
            'category_id' => $this->categoryId
        ]);
        $this->updateMode = false;
        $this->emit('showAlert', "Your Recipe Updated Successfully!");
        redirect()->to('/recipe-detail');
    }

    public function render()
    {
        return view('livewire.recipe.rud-recipe', [
            'myRecipes' => $this->myRecipes,
        ]);
    }
}
