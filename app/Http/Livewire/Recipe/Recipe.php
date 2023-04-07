<?php

namespace App\Http\Livewire\Recipe;

use App\Models\Recipe as ModelsRecipe;
use Livewire\Component;

class Recipe extends Component
{
    public $recipe;
    public function mount($id)
    {
        $this->recipe = ModelsRecipe::find($id);
    }

    public function render()
    {
        return view('livewire.recipe.recipe');
    }
}