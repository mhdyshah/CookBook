<?php

namespace App\Http\Livewire\Index;

use Livewire\Component;

class ArticleCards extends Component
{
    public $bestRecipe;
    public function mount($bestRecipe)
    {
        $this->bestRecipe = $bestRecipe;
    }

    public function render()
    {
        return view('livewire.index.article-cards');
    }
}
