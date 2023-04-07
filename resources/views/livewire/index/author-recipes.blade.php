<div>
    <div class="container row col-12 mt-5 ms-5">
        <h4 class="pt-4 pb-1 fw-bold text-dark display-5" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Recipes of Chef</h4>
        <hr class="bg-light w-25  m-0">
    </div>
    <div class="row col-12 col-md-11 justify-content-center align-items-center mt-5 ms-5">
        @foreach ($author as $recipe)
            <div class="col-11 col-md-3 py-4 h-100">
                <div class="card hover_shadow hover_up">
                    <a href="/recipe/{{ $recipe->id }}" style="text-decoration: none;">
                        <div class="p-0 over_hidden card-header h_10 d-flex align-items-center justify-content-center">
                            <img src="{{ $recipe->image }}" alt="{{ $recipe->title }}" class="h-100">
                        </div>
                        <div class="card-body px-1 py-2">
                            <h5 class="my-2 card-title text-dark text-center">{{ $recipe->title }}</h5>
                            <p class="my-2 card-text text-dark text-center text-justify h_85px">
                                {{ $recipe->short_description }}
                            </p>
                        </div>
                        <div class="mb-3 text-center">
                            <a href="/recipe/{{ $recipe->id }}}" class="btn btn-danger cursor_pointer_shadow rounded_5 px-3" dideo-checked="true">learn more</a>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
        {{ $author->links('livewire.utils.pagination-links') }}
    </div>
</div>
