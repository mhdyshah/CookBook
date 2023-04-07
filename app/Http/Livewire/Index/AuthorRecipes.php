<?php

namespace App\Http\Livewire\Index;

use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class AuthorRecipes extends Component
{
    use WithPagination;
    public $authId;

    public function mount($id)
    {
        $this->authId = $id;
    }

    public function render()
    {
        $result = Recipe::where("user_id", $this->authId)->paginate(4);
        $recipes = $result;
        return view('livewire.index.author-recipes', [
            'author' => $recipes
        ]);
    }
}
