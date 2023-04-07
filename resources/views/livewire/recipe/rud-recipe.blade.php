<div class="container justify-content-center">
    @if(session()->has('message'))
        <div class="alert alert-danger mt-3">
            {{ session()->get('message') }}
        </div>
    @endif

    @if ($updateMode)
        @include('livewire.recipe.update')
    @endif
    <div class="row col-12 col-md-11 justify-content-center align-items-center mt-5 ms-5">
        @foreach ($myRecipes as $recipe)
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
                    </a>
                    <div class="card-footer my-2 text-center">
                        <button class="btn btn-dark cursor_pointer_shadow rounded_5 px-3" dideo-checked="true" wire:click="edit({{ $recipe->id }})">Update</button>
                        <button class="btn btn-danger cursor_pointer_shadow rounded_5 px-3" dideo-checked="true" wire:click="delete({{ $recipe->id }})">Delete</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
