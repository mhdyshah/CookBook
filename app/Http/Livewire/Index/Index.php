<?php

namespace App\Http\Livewire\Index;

use App\Models\Recipe;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        return view('livewire.index.index', [
            'bestRecipes' => Recipe::where('is_best', 1)->get()
        ]);
    }
}
