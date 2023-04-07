<section class="py-4" style="background-color: #212529;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100" >
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px; margin-bottom:2px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <div class="justify-content-center text-center">
                                    <a href="/" style="text-decoration: none;">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="fw-bold fs-1" style="color: #5e9693;">Cook</span><span class="fs-1" style="color: #212529;">Book</span>
                                    </a>
                                </div>
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                <form class="mx-1 mx-md-4">

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input name="name" type="text" id="name" class="form-control" wire:model.defer='name' />
                                            <label class="form-label" for="name">Your Name</label>
                                        </div>
                                    </div>
                                    @error("name")
                                        <small class="d-block text-danger w-100 text-center">{{ $message }}</small>
                                    @enderror

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input name="email" type="email" id="email" class="form-control" wire:model.defer='email' />
                                            <label class="form-label" for="email">Your Email</label>
                                        </div>
                                    </div>
                                    @error("email")
                                        <small class="d-block text-danger w-100 text-center">{{ $message }}</small>
                                    @enderror

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input name="password" type="password" id="password" class="form-control" wire:model.defer='password' />
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                    </div>
                                    @error("password")
                                        <small class="d-block text-danger w-100 text-center">{{ $message }}</small>
                                    @enderror

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input name="password_confirmation" type="password" id="password_confirmation" class="form-control" wire:model.defer='password_confirmation' />
                                            <label class="form-label" for="password_confirmation">Repeat your password</label>
                                        </div>
                                    </div>
                                    @error("password_confirmation")
                                        <small class="d-block text-danger w-100 text-center">{{ $message }}</small>
                                    @enderror

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input name="policy" class="form-check-input me-2" type="checkbox" value="" id="policy" wire:model.defer='policy' />
                                        <label class="form-check-label" for="policy">
                                            I agree all statements in <a href="#!">Terms of service</a>
                                        </label>
                                    </div>
                                    @error("policy")
                                        <small class="d-block text-danger w-100 text-center">{{ $message }}</small>
                                    @enderror

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="button" class="btn btn-dark btn-lg" wire:click='handleRegister'>Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/sign-in"
                                        class="fw-bold text-body"><u>Login here</u></a>
                                    </p>
                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_zw0djhar.json"  background="transparent"  speed="1"  style="width: 600px; height: 600px;"  loop  autoplay></lottie-player>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
