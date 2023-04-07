<section class="vh-100" style="background-color: #212529;">
    <div class="container py-5 h-100">
        <div class="d-flex justify-content-center align-items-center h-100" >
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block" >
                            <img src="/assets/imgs/log.jpg"
                                alt="login form" class="img-fluid mw-100" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form>
                                    <div class="d-flex align-items-center mb-3 pb-1 justify-content-center">
                                        <a href="/" style="text-decoration: none;">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="fw-bold fs-1" style="color: #5e9693;">Cook</span><span class="fs-1" style="color: #212529;">Book</span>
                                        </a>
                                    </div>
                                    <h5 class="fw-bold mb-3 pb-3 text-center" style="letter-spacing: 1px;">Sign into your account</h5>
                                    <div class="form-outline mb-4">
                                        <input name="email" type="email" id="email" class="form-control form-control-lg" wire:model.defer='email' />
                                        <label class="form-label" for="email">Email address</label>
                                    </div>
                                    @error('email')
                                        <small class="text-center d-block text-danger">{{ $message }}</small>
                                    @enderror

                                    <div class="form-outline mb-4">
                                        <input name="password" type="password" id="password" class="form-control form-control-lg" wire:model.defer='password' />
                                        <label class="form-label" for="password">Password</label>
                                    </div>
                                    @error('password')
                                        <small class="text-center d-block text-danger">{{ $message }}</small>
                                    @enderror

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="button" wire:click='handleLogin'>Login</button>
                                    </div>
                                    <div class="form-check d-flex mb-1">
                                        <input name="remember" class="form-check-input me-2" type="checkbox" value="" id="remember" wire:model.defer='remember' />
                                        <label class="form-check-label fw-bold" for="remember">
                                            remember me!
                                        </label>
                                    </div>
                                    <a class="small text-muted" href="#">Forgot password?</a>
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="/sign-up"
                                        style="color: #393f81;">Register here</a></p>
                                    <a href="#!" class="small text-muted">Terms of use.</a>
                                    <a href="#!" class="small text-muted">Privacy policy</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
