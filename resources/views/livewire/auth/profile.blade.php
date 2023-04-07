<div class="container rounded bg-white mt-3 mb-5">
    <form class="row g-3" wire:submit.prevent="editProfile">
        <div class="col-md-12 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="250px" src="{{ $image }}">
                <span class="fw-bold fs-4">{{ $name }}</span>
                <span class="text-dark-50 fs-5">{{ $email }}</span>
                </div>
        </div>

        <div class="form-outline col-md-6 my-5">
            <label class="form-label fw-bold fs-5" for="emailDisabled">Email Address</label>
            <input
                class="form-control"
                id="emailDisabled"
                type="text"
                placeholder="{{ $email }}"
                disabled
            />
        </div>

        <div class="col-md-6 my-5">
            <label for="name" class="form-label fw-bold fs-5">Name</label>
            <input name="name" type="text" class="form-control shadow-sm" id="name" placeholder="{{ $name }}" wire:model.defer='name'>
        </div>


        <div class="col-md-12">
            <label for="image" class="form-label fw-bold fs-5">Your Image</label>
            <input id="image" name="image" class="form-control mb-3 shadow-sm" type="file" wire:model.defer="image">
        </div>
        @error('image') <span class="error">{{ $message }}</span> @enderror
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Save Profile</button>
        </div>
    </form>
</div>
</div>
</div>
