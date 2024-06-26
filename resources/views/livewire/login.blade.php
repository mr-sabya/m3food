<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12 col-md-8 col-lg-5 col-xl-5 col-xxl-4 mx-auto">
            <div class="card rounded-4">
                <div class="card-body p-5">
                    <div class="d-flex flex-column align-items-center">
                        <img src="assets/fontend/img/footer-logo.svg" width="100" loading="lazy">

                        <h4 class="fw-bold">Get Started Now</h4>
                        <p class="mb-0">Enter your credentials to login your account</p>
                    </div>
                    <form method="POST" class="row g-3" action="https://naturobd.com/login">
                        <input type="hidden" name="_token" value="RcNlCoQYQykmPjaLXlxfbgF0hyMTMzpyitcAl36S" autocomplete="off">
                        <div class="form-body my-4">
                            <div class="col-12">
                                <label for="email" class="form-label">Email
                                    Address</label>


                                <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus>

                            </div>


                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    Show
                                </button>
                            </div>


                        </div>
                        <div class="row my-2">
                            <div class="col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="remember" id="flexSwitchCheckChecked">

                                    <label class="form-check-label" for="flexSwitchCheckChecked">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="password/reset.html">Forgot
                                    Password?</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-lg btn-primary">Login</button>
                            </div>
                            <div class="d-grid my-2">
                                <a type="submit" href="register.html" class="btn btn-lg btn-dark">Registration</a>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>