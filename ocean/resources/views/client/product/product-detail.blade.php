@extends('client.layout.master')
@section('title', 'Product detail')
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
                <li><a href="{{ url('home') }}">Trang chủ</a></li>
                <li><a href="{{ url('shop')}}">Cửa hàng</a></li>
                
                <li><a href="{{ url('blog')}}">Blog</a></li>
                <li><a href="{{ url('contact')}}">Giới Thiệu</a></li>
                <li><a href="">Hỗ trợ</a>
                    <ul class="dropdown" style="width: 148px">
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
<!-- Breacumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home"></i>Trang chủ</a>
                    <span>Chi tiết sản phẩm</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacumb Section End -->

<!-- Product Shop Section Begin  -->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="filter-widget">
                    <h4 class="fw-title">Danh mục</h4>
                    <ul class="filter-catagories">
                        @foreach($cats as $cat)
                        <li><a href="{{url("product/category/$cat->id")}}">{{$cat->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            @foreach($product->productImages as $productImage)
                            <img class="product-big-img" src="{{asset("client/img/products/$productImage->path")}}" alt="">
                            @endforeach
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>{{$product->productCategory->name}}</span>
                                <h3>{{$product->name}}</h3>
                                <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                            </div>
                            <div class="pd-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(5)</span>
                            </div>
                            <div class="pd-desc">
                                <p>{{$product->content}}</p>
                                <h4 style="color: black">{{$product->price}}</h4>
                            </div>
                            
                            <div class="pd-size-choose">
                                <div class="sc-item">
                                    <input type="radio" id="sm-size">
                                    @foreach($product->volumes as $volume)
                                    <label for="sm-size">{{$volume->volume}}ml</label>
                                    @endforeach
                                </div>

                            </div>
                            <div class="quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" class="" value="1">
                                    </div>
                                    <a href="#" class="primary-btn pd-cart" style="background-color: black">Thêm giỏ hàng</a>
                                </div>
                            </div>
                            <ul class="pd-tags">
                                <li><span>Thương hiệu</span>: {{$product->brand->name}}</li>
                                <!-- <li><span>TAGS</span>: Clothing, T-shirt, Woman</li> -->
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li><a class="active" href="#tab-1" data-toggle="tab" role="tab">Mô tả</a></li>
                            <li><a href="#tab-3" data-toggle="tab" role="tab">Đánh giá</a></li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h5>Giới thiệu</h5>
                                            <p>{{$product->content}}</p>
                                            <h5>Đặc trưng</h5>
                                            <p>{{$product->description}}</p>
                                        </div>
                                        <div class="col-lg-5">
                                            @foreach($product->productImages as $productImage)
                                            <img class="product-big-img" src="{{asset("client/img/products/$productImage->path")}}" alt="">
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                <div class="customer-review-option">
                                    <h4>2 Bình luận</h4>
                                    <div class="comment-option">
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="{{asset('client/img/product-single/avatar-1.png')}}" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <h5>Brandon Kelley <span>27 Aug 2022</span></h5>
                                                <div class="at-reply">Nice !</div>
                                            </div>
                                        </div>
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="{{asset('client/img/product-single/avatar-2.png')}}" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <h5>Brandon Kelley <span>27 Aug 2022</span></h5>
                                                <div class="at-reply">Nice !</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="personal-rating">
                                        <h6>Đánh giá của bạn</h6>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="leave-comment">
                                        <h4>Bình luận</h4>
                                        <form action="" class="comment-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Họ tên">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Email">
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea placeholder="Nội dung"></textarea>
                                                    <button type="submit" class="site-btn" style="background-color: black">Gửi</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End  -->

<!-- Related Products Section Begin  -->
<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản phẩm tương tự</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{asset('client/img/products/nuochoa-1.jpg')}}" alt="">
                        <div class="sale pp-sale">Sale</div>
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="#">+ Quick View</a></li>
                            <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">Towel</div>
                        <a href="#">
                            <h5>Pure Pineapple</h5>
                        </a>
                        <div class="product-price">
                            $14.00
                            <span>$35.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Related Products Section End  -->
@endsection