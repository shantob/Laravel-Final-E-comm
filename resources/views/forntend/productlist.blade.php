<x-forntend.master>
<x-slot:title>
       ALL PRODUCT LIST
    </x-slot>
    <section class="breadcrumb-section set-bg" style="margin-top: 12rem;" data-setbg="{{asset('assets/forntend/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Ajob Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Colors</h4>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="white">
                                    White
                                    <input type="radio" id="white">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--gray">
                                <label for="gray">
                                    Gray
                                    <input type="radio" id="gray">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--red">
                                <label for="red">
                                    Red
                                    <input type="radio" id="red">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--black">
                                <label for="black">
                                    Black
                                    <input type="radio" id="black">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--blue">
                                <label for="blue">
                                    Blue
                                    <input type="radio" id="blue">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--green">
                                <label for="green">
                                    Green
                                    <input type="radio" id="green">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h4>Popular Size</h4>
                            <div class="sidebar__item__size">
                                <label for="large">
                                    Large
                                    <input type="radio" id="large">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="medium">
                                    Medium
                                    <input type="radio" id="medium">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="small">
                                    Small
                                    <input type="radio" id="small">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="tiny">
                                    Tiny
                                    <input type="radio" id="tiny">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Latest Products</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳700.00</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="https://images.unsplash.com/photo-1560169897-fc0cdbdfa4d5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8d2F0Y2hpbmclMjB0dnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳300.00</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="https://images.unsplash.com/photo-1594032194509-0056023973b2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fHQlMjBzaGlydHN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                                    width="300" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳650.00</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳700.00</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="https://images.unsplash.com/photo-1560169897-fc0cdbdfa4d5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8d2F0Y2hpbmclMjB0dnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳300.00</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="https://images.unsplash.com/photo-1594032194509-0056023973b2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fHQlMjBzaGlydHN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                                    width="300" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳650.00</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="https://images.unsplash.com/photo-1524592094714-0f0654e20314?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8d2F0Y2h8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="featured__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Watch</span>
                                            <h5><a href="#">Watch</a></h5>
                                            <div class="product__item__price">৳300.00<span>৳360.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGNsb3RoZXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="featured__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Shirt</span>
                                            <h5><a href="#">Shirt/T-Shirt</a></h5>
                                            <div class="product__item__price">৳700.00<span>৳760.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="https://images.unsplash.com/photo-1551489186-cf8726f514f8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8c25pa2Vyc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="featured__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Snikers</span>
                                            <h5><a href="#">Snikers</a></h5>
                                            <div class="product__item__price">৳950.00<span>৳1060.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="featured__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Laptop</span>
                                            <h5><a href="#">Laptop & Computer</a></h5>
                                            <div class="product__item__price">৳70000.00<span>৳76500.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="https://images.unsplash.com/photo-1551489186-cf8726f514f8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8c25pa2Vyc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="featured__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Snikers</span>
                                            <h5><a href="#">Snikers</a></h5>
                                            <div class="product__item__price">৳950.00<span>৳1060.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGNsb3RoZXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="featured__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Shirt</span>
                                            <h5><a href="#">Shirt/T-Shirt</a></h5>
                                            <div class="product__item__price">৳700.00<span>৳760.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg"
                                    data-setbg="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#">Cash On Pement</a></h6>
                                    <h5>৳700.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg"
                                    data-setbg="https://images.unsplash.com/photo-1613418383495-10d3a8757315?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FtYXJhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#">Cash On Pement</a></h6>
                                    <h5>৳18000.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg"
                                    data-setbg="https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#">Cash On Pement</a></h6>
                                    <h5>৳70000.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg"
                                    data-setbg="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#">Cash On Pement</a></h6>
                                    <h5>৳700.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg"
                                    data-setbg="https://images.unsplash.com/photo-1613418383495-10d3a8757315?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FtYXJhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#">Cash On Pement</a></h6>
                                    <h5>৳18000.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg"
                                    data-setbg="https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#">Cash On Pement</a></h6>
                                    <h5>৳70000.00</h5>
                                </div>
                            </div>>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg"
                                    data-setbg="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#">Cash On Pement</a></h6>
                                    <h5>৳700.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg"
                                    data-setbg="https://images.unsplash.com/photo-1613418383495-10d3a8757315?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FtYXJhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#">Cash On Pement</a></h6>
                                    <h5>৳18000.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg"
                                    data-setbg="https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#">Cash On Pement</a></h6>
                                    <h5>৳70000.00</h5>
                                </div>
                            </div>>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg"
                                    data-setbg="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#">Cash On Pement</a></h6>
                                    <h5>৳700.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg"
                                    data-setbg="https://images.unsplash.com/photo-1613418383495-10d3a8757315?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FtYXJhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#">Cash On Pement</a></h6>
                                    <h5>৳18000.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg"
                                    data-setbg="https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#">Cash On Pement</a></h6>
                                    <h5>৳70000.00</h5>
                                </div>
                            </div>>
                        </div>
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ................................ -->
<x-forntend.partials.card/>
<!-- fooder//////////////////////////////// -->
</x-forntend.master>