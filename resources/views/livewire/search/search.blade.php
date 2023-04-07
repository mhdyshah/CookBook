<main class="main container-fluid">
    <div class="row col-12 justify-content-center align-items-center my-5 py-3">
        <div class="col input-group">
            <input
                type="text"
                class="form-control shadow-sm"
                placeholder="Search in thousands of recipes..."
                aria-label="search"
                aria-describedby="search"
                wire:model.debounce.500ms='char'
            />
            <span class="input-group-text bg-white shadow-sm" id="search">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                    <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                    <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z"/>
                </svg>
            </span>
        </div>

        {{-- category --}}
        <div class="col">
            <select class="form-select shadow-sm" aria-label="Default select example" wire:model="categoryId">
                <option value="0" selected>Selection By Categories</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="container row col-12 mt-5 ms-5">
            <h4 class="pt-4 pb-1 fw-bold text-dark display-5" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Recipes</h4>
            <hr class="bg-light w-25  m-0">
        </div>

        {{-- cards --}}
        <div class="row col-12 col-md-11 justify-content-center align-items-center mt-3">
            @foreach ($recipes as $recipe)
                <livewire:index.article-cards :bestRecipe='$recipe' :key="$recipe->id">
            @endforeach
            {{ $recipes->links('livewire.utils.pagination-links') }}
        </div>
    </div>
</main>
