<div class=" container-fluid fixed-top bg-light " style="height: 4rem;">
    <header class="header">

        <div class="container-fluid">
            <div class="row" style="height: 5rem;">
                <div class="col-lg-6 w-100">
                    <section class="hero hero-normal " style="height: 3rem;">
                        <div class="">
                            <div class="row">
                                <div class="col-lg-4 mt-2">
                                    <div class="hero__categories">
                                        <div class="hero__categories__all rounded">
                                            <i class="fa fa-bars"></i>
                                            <span>Category</span>
                                        </div>
                                        <ul>
                                            @foreach ($category as $categories)
                                                <li><a href="#">Grocery</a></li>
                                                <li><a href="#">Kitchen Applicens</a></li>
                                                <li><a href="#">Toys & Games</a></li>
                                                <li><a href="#">Sports & Fittenss</a></li>
                                                <li><a href="#">Mobiles & Accessories</a></li>
                                                <li><a href="#">Books</a></li>
                                                <li><a href="#">Furniture</a></li>
                                                <li><a href="#">Other</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-8 mt-3 w-100">
                                    <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search ..." class="form-control">
                                            <button class="btn btn-secondary " type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-4 py-3 text-right w-100 hover">
                    <a href="{{ route('home') }}"><button
                            class="btn btn-light px-2 {{ Route::is('home') ? 'active' : '' }} mx-2">Home</button></a>
                    <a href="{{ route('productlist') }}"><button
                            class="{{ Route::is('productlist') ? 'active' : '' }} btn btn-light px-2 mx-2">All
                            Product</button></a>
                    <a href="{{ route('contact') }}"><button
                            class="btn btn-light px-2 {{ Route::is('contact') ? 'active' : '' }} mx-2">Contact
                            Us</button></a>

                    <a href="{{ route('about') }}"><button
                            class="btn btn-light px-2 {{ Route::is('about') ? 'active' : '' }} mx-2">About</button></a>
                </div>
                <div class="col-lg-2">
                    <div class="header__cart">
                        <ul>
                            <li><a href="{{ route('checkout') }}"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
                            </li>
                        </ul>

                        @if (Auth::user() != null)
                            <div class="header__top__right__auth">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="btn btn-success"
                                        onclick="event.preventDefault();this.closest('form').submit();">
                                        {{ Auth::user()->name }}
                                    </button>
                                </form>
                            </div>
                        @else
                            <div class="header__top__right__auth">
                                <a href="{{ route('login') }}" type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa fa-user"></i>
                                    Login</a>
                            </div>
                        @endif

                    </div>

                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
</div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->

</div>
