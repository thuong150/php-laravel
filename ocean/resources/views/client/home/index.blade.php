    @extends('client.layout.master')
    @section('title', 'Home')
    @section('navitem')
<div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Danh sách loại</span>
                        <ul class="depart-hover">
                        @foreach($cats as $cat)
                        <li><a href="{{url("product/category/$cat->id")}}">{{$cat->name}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{ url('home') }}">Trang chủ</a></li>
                        <li><a href="{{ url('shop')}}">Cửa hàng</a></li>
                        <!-- <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li> -->
                        <li><a href="{{ url('blog')}}">Blog</a></li>
                        <li><a href="{{ url('contact')}}">Giới Thiệu</a></li>
                        <li><a href="">Hỗ trợ</a>
                            <ul class="dropdown" style="width: 148px">
                                <!-- <li><a href="blog-details.html">Blog Detail</a></li>
                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="check-out.html">Check Out</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login</a></li> -->
                                <li><a href="login.html">Chat online shop</a></li> -->
                                <li><a href="login.html">Liên hệ facebook</a></li> -->
                                <li><a href="login.html">Liên hệ zalo</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
@endsection
    @section('content')
    <!--  -->
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="client/img/slider-1.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- <span>Nước hoa nam</span> -->
                            <h1>Nước hoa chính hãng</h1>
                            <p>Chúng tôi cam kết cung cấp đến khách hàng những sản phẩm nước hoa chính hãng với chất lượng cao và giá cả hợp lý. Hãy khám phá các sản phẩm của chúng tôi ngay hôm nay để tìm cho mình một hương thơm độc đáo và tinh tế.</p>
                            <a href="#" class="primary-btn" style="background-color: black ;">Shop Nam</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="client/img/slider-2.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- <span>Nước hoa nữ</span> -->
                            <h1>Free ship toàn quốc</h1>
                            <p>Chúng tôi cam kết giao hàng nhanh và miễn phí vận chuyển trên toàn quốc để mang đến cho bạn sự tiện lợi và hài lòng. 1 đổi 1 cho kiện hàng bị bể trong quá trình giao!</p>
                            <a href="#" class="primary-btn" style="background-color: black ;">Shop Nữ</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Partner Logo Section Begin -->
    <div class="partner-logo" style="margin-top: 40px;">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <a href="#"><img src="client/img/brand/chanel.png" style="margin-right: 0px" width="200" height="100" alt=""></a>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <a href="#">
                            <img src="client/img/brand/lancome.png" width="200" height="100" alt="">
                        </a>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <a href="#">
                            <img src="client/img/brand/gucci.png" width="200" height="100" alt="">
                        </a>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <a href="#">
                            <img src="client/img/brand/dvag.png" width="185" height="85" alt="">
                        </a>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <a href="#">
                            <img src="client/img/brand/dior.png" width="185" height="85" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->
    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <!-- <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Kids</a></li>
                        </ul>
                    </div> -->
                    <!-- <div class="filter-widget">
                        <h4 class="fw-title">Brand</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                <label for="bc-calvin">
                                    Calvin Klein
                                    <input type="checkbox" id="bc-calvin">
                                    <span class="checkmark"></span>
                                </label> 
                            </div>
                            <div class="bc-item">
                                <label for="bc-diesel">
                                    Diesel
                                    <input type="checkbox" id="bc-diesel">
                                    <span class="checkmark"></span>
                                </label> 
                            </div>
                            <div class="bc-item">
                                <label for="bc-polo">
                                    Polo
                                    <input type="checkbox" id="bc-polo">
                                    <span class="checkmark"></span>
                                </label> 
                            </div>
                            <div class="bc-item">
                                <label for="bc-tommy">
                                    Tommy Hilfiger
                                    <input type="checkbox" id="bc-tommy">
                                    <span class="checkmark"></span>
                                </label> 
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="filter-widget">
                        <h4 class="fw-title">Price</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                            <div data-min="33" data-max="98" class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Filter</a>
                    </div> -->
                    <!-- <div class="filter-widget">
                        <h4 class="fw-title">Color</h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="cs-black">
                                <label for="cs-black" class="cs-black">Black</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-violet">
                                <label for="cs-violet" class="cs-violet">Violet</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-blue">
                                <label for="cs-blue" class="cs-blue">Blue</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-yellow">
                                <label for="cs-yellow" class="cs-yellow">Yellow</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-red">
                                <label for="cs-red" class="cs-red">Red</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green">
                                <label for="cs-green" class="cs-green">Green</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Size</h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="s-size">
                                <label for="s-size">S</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="m-size">
                                <label for="m-size">M</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="l-size">
                                <label for="l-size">L</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="s-size">
                                <label for="s-size">S</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xs-size">
                                <label for="xs-size">XS</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <div class="fw-title">Tags</div>
                        <div class="fw-tags">
                            <a href="#">Towel</a>
                            <a href="#">Shoes</a>
                            <a href="#">Coat</a>
                            <a href="#">Dresses</a>
                            <a href="#">Trousers</a>
                            <a href="#">Men's hats</a>
                            <a href="#">Backpack</a>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-12 order-1 order-lg-2 ">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting" name="" id="">
                                        <option value="">Giá thấp đến cao</option>
                                        <option value="">Giá cao đến thấp</option>
                                    </select>
                                    <select class="p-show" name="" id="">
                                        <option value="">Phổ biến</option>
                                        <option value="">Mua nhiều</option>
                                        <option value="">Giảm giá nhiều</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="col-lg-5 col-md-5 text-right">
                                <p>Show 01- 09 Of 36 Product</p>
                            </div> -->
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        @foreach($product->productImages as $image)
                                        <img src="client/img/products/{{$image->path}}" alt="">
                                        @endforeach
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href="{{ url('product-detail', $product->id)}}"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="{{ url('product-detail', $product->id)}}">+ Quick View</a></li>
                                            <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{{$product->brand->name}}</div>
                                        <a href="{{ url('product-detail')}}">
                                            <h5>{{$product->name}}</h5>
                                        </a>
                                        <div class="product-price">
                                        {{ number_format($product->price, 0, ',', '.') }}đ
                                            <!-- <span>$35.00</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="loading-more">
                        <!-- <i class="icon_loading"></i> -->
                        <a href="#">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
    @endsection