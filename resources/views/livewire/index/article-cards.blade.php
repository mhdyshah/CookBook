{{-- popular(All) card --}}
<div class="col-11 col-md-3 px-3 py-4 h-100">
    <div class="card hover_shadow hover_up">
        <a href="/recipe/{{ $bestRecipe->id }}" style="text-decoration: none;">
            <div class="p-0 over_hidden card-header h_10 d-flex align-items-center justify-content-center">
                <img src="{{ $bestRecipe->image }}" alt="{{ $bestRecipe->title }}" class="h-100">
            </div>
            <div class="card-body px-1 py-2">
                <h5 class="my-2 card-title text-dark text-center">{{ $bestRecipe->title }}</h5>
                <p class="my-2 card-text text-dark text-center text-justify h_85px">
                    {{ $bestRecipe->short_description }}
                </p>
                <div class="my-2 text-center">
                    <a href="/recipe/{{ $bestRecipe->id }}" class="btn btn-danger cursor_pointer_shadow rounded_5 px-3" dideo-checked="true">learn more</a>
                </div>
            </div>
        </a>
    </div>
</div>
