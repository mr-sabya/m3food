<header id="nav">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="{{ route('home') }}" wire:navigate>
                <img class="main-logo" src="{{ url('assets/frontend/img/logo.svg') }}" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse form-menu navbar-collapse" id="navbarSupportedContent">
                <div class="nav-menu">
                    <form class="d-flex search" role="search" action="https://naturobd.com/shop" method="GET">
                        <div class="input-group">
                            <span class="input-group-text">
                                <span class="material-icons-outlined">
                                    search
                                </span>
                            </span>
                            <input class="form-control" type="search" name="search" placeholder="Search in Naturo">
                            <button class="btn input-group-text search-btn">
                                Search
                            </button>
                        </div>
                    </form>
                    <div class="right">
                        <div class="user-info">

                            <div class="name">
                                <!-- User is not logged in -->
                                <div class="tagline"><a href="{{ route('login')}}" wire:navigate>Login</a></div>


                            </div>
                        </div>
                        <div class="favorite badge-icon">

                        </div>

                        <a href="order/summery.html" class="cart-area" class="cart-area">
                            <div class="cart badge-icon">
                                <span class="material-icons-outlined">
                                    shopping_cart
                                </span>
                                <span class="badge-tag" id="totalCartCount" style="width: unset;">
                                    0
                                </span>
                            </div>
                            <div class="cart-text">
                                Cart
                                <div>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>