<div class="ms-content-wrapper ms-auth">
    <div class="ms-auth-container">
        <div class="ms-auth-col">
            <div class="ms-auth-bg"></div>
        </div>
        <div class="ms-auth-col">
            <div class="ms-auth-form">
                <form wire:submit.prevent="submit">
                    <h3>Login to Account</h3>
                    <p>Please enter your email and password to continue</p>
                    <div class="mb-3">
                        <label for="validationCustom08">Email Address</label>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Email Address" wire:model="email">
                            @error('email') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            @if (session()->has('error'))<div class="invalid-feedback d-block">{{ session('error') }}</div> @endif
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="validationCustom09">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Password" wire:model="password">
                            @error('password') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="ms-checkbox-wrap">
                            <input class="form-check-input" type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                        </label> <span> Remember Password </span>
                        <label class="d-block mt-3"><a href="#" class="btn-link" data-toggle="modal" data-target="#modal-12">Forgot Password?</a>
                        </label>
                    </div>
                    <button class="btn btn-primary mt-4 d-block w-100" type="submit">Sign In</button>
                    <p class="mb-0 mt-3 text-center">Don't have an account? <a class="btn-link" href="default-register.html">Create Account</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>