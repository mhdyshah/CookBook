<div class="my-header">
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="cursor_pointer_text_shadow d-flex align-items-center mb-2 me-4 mb-lg-0 text-white text-decoration-none">
                    <span class="fw-bold fs-3" style="color: #5e9693;">Cook</span><span class="fs-3" style="color: #ffff;">Book</span>
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li class="cursor_pointer_text_shadow"><a href="/search/0" class="nav-link px-2 text-white">Recipes</a></li>
                    <li class="cursor_pointer_text_shadow"><a href="#" class="nav-link px-2 text-white">Download</a></li>
                    <li class="cursor_pointer_text_shadow"><a href="/#FAQs" class="nav-link px-2 text-white">FAQs</a></li>
                    <li class="cursor_pointer_text_shadow"><a href="{{ route('about') }}" class="nav-link px-2 text-white">About</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" >
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search" wire:model.lazy="char">
                        <a href="/search/0/{{ $char }}" class="input-group-text" id="search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </a>
                    </div>
                </form>

                <div class="text-end">
                    @if (auth()->check())
                        <div class="dropdown">
                            <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item active" href="/profile">Profile</a></li>
                                <li><a class="dropdown-item" href="/recipe-detail">My Recipes</a></li>
                                <li><a class="dropdown-item" href="/creat-recipe">Create Recipe</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </div>
                    @else
                        <a href="/sign-in" target="_blank" class="btn btn-outline-light me-2">Login</a>
                        <a href="/sign-up" target="_blank" class="btn btn-warning">Sign-up</a>
                    @endif
                </div>
            </div>
        </div>
    </header>
</div>
