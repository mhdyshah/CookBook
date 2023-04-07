<div class="container">
    <h1 class="text-center display-4 mt-3 mb-5" style="font-family: 'Times New Roman', Times, serif">Create An Amazing Recipe! 😉</h1>
    <h2 class="text-danger" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Hints of creating recipe👇</h2>
    <ul class="list-group">
        <li class="list-group-item list-group-item-success">Thanks for choosing us!</li>
        <li class="list-group-item">Lorem ipsum dolor aspernatur delectus iure.</li>
        <li class="list-group-item">Lorem ipsum dolor aspernatur delectus iure.</li>
        <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
        <li class="list-group-item">Lorem ipsum dolor aspernatur delectus iure.</li>
        <li class="list-group-item list-group-item-danger">Be careful do not choose worse image for your recipe.</li>
    </ul>

    <form class="row g-3 mt-3" wire:submit.prevent="store">
        @csrf
        <div class="form-group col-md-6 justify-content-center">
            <label class="form-label fs-5 fw-bold" for="title">Title</label>
            <input type="text" class="form-control rounded" name="title" id="title" placeholder="Enter Title" wire:model.defer="title">
        </div>
        @error("title")
            <small class="text-center d-block text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group col-md-6">
            <label class="form-label fs-5 fw-bold" for="materials">Materials</label>
            <textarea type="text" class="form-control rounded" name="materials" id="materials"  placeholder="Enter Materials" wire:model.defer="materials"></textarea>
        </div>
        @error("materials")
            <span class="text-center d-block text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group col-12">
            <label class="form-label fs-5 fw-bold" for="short_description">Short_description</label>
            <textarea name="short_description" type="text" class="form-control rounded" id="short_description"  placeholder="Enter Short Description" wire:model.defer="short_description"></textarea>
        </div>
        @error("short_description")
            <span class="text-center d-block text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group col-12">
            <label class="form-label fs-5 fw-bold" for="description">Description:</label>
            <textarea cols="15" rows="15" type="text" id="description" name="description" class="form-control rounded" wire:model.defer="description"></textarea>
        </div>
        @error("description")
            <span class="text-center d-block text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group col-12">
            <h2 class="mt-4">Select Category of your Recipe</h2>
            <select class="form-select shadow-sm" aria-label="Default select example" wire:model.defer="categoryId">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" class="text-center fw-bold fs-5 py-3 my-3">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <input class="form-control" type="file" wire:model="image">
        @error('image') <span class="error">{{ $message }}</span> @enderror
        <div class="col-12">
            <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
        </div>
    </form>
</div>
