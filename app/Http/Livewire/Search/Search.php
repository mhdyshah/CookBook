<?php

namespace App\Http\Livewire\Search;

use App\Models\Category;
use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;


class Search extends Component
{
    use WithPagination;

    public $categories;
    public $categoryId;
    public $char = "";
    public $sortField = 'view_count';
    public $sortDirection = 'desc';

    public function mount($catId, $char = "")
    {
        $this->categories = Category::all();
        $this->categoryId = $catId;
        $this->char = $char;
    }

    public function render()
    {

        if ($this->categoryId == 0) {
            $result = Recipe::where('title', 'like', '%' . $this->char . '%')
                ->orWhere('short_description', 'like', '%' . $this->char . '%')
                ->orWhere('description', 'like', '%' . $this->char . '%')
                ->orWhere('materials', 'like', '%' . $this->char . '%')
                ->orderBy($this->sortField, $this->sortDirection)
                ->paginate(8);
            $recipes = $result;
        } else {
            $result = Recipe::where([
                ['category_id', $this->categoryId],
                ['title', 'like', '%' . $this->char . '%']
            ])->orWhere([
                ['category_id', $this->categoryId],
                ['short_description', 'like', '%' . $this->char . '%']
            ])->orWhere([
                ['category_id', $this->categoryId],
                ['description', 'like', '%' . $this->char . '%']
            ])->orWhere([
                ['category_id', $this->categoryId],
                ['materials', 'like', '%' . $this->char . '%']
            ])->orderBy(
                $this->sortField,
                $this->sortDirection
            )->paginate(8);
            $recipes = $result;
        }

        return view('livewire.search.search', [
            'recipes' => $recipes,
        ]);
    }
}
