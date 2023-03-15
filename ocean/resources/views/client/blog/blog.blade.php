@extends('client.layout.master')
@section('title', 'Blog')
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
                        <!-- <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li> -->
                        <li class="active"><a href="{{ url('blog')}}">Blog</a></li>
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
<!-- Breacumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home"></i>Trang chủ</a>
                    <span>Bài viết</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacumb Section End -->
<!-- Blog Section Begin  -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                <div class="blog-sidebar">
                    <!-- <div class="search-form">
                        <h4>Search</h4>
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="blog-catagory">
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="">CodeLear</a></li>
                            <li><a href=""></a></li>
                            <li><a href="">Picnic</a></li>
                            <li><a href="">Model</a></li>
                        </ul>
                    </div> -->
                    <div class="recent-post">
                        <h4>Bài đăng gần đây</h4>
                        <div class="recent-blog">
                            @foreach($blogs as $blog)
                            <a href="{{ url('blog-detail', $blog->id) }}" class="rb-item">
                                <div class="rb-pic">
                                    <img src="client/img/blog/{{$blog->image}}" alt="">
                                </div>
                                <div class="rb-text">
                                    <h6>{{$blog->title}}</h6>
                                    <p> <span>{{ \Carbon\Carbon::parse($blog->updated_at)->format('d/m/Y') }}</span></p>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog-item">
                            <div class="bi-pic">
                                <img src="client/img/blog/{{$blog->image}}" alt="">
                            </div>
                            <div class="bi-text">
                                <a href="{{ url('blog-detail', $blog->id) }}">
                                    <h4>{{$blog->subtitle}}</h4>
                                </a>
                                <p> <span>{{ \Carbon\Carbon::parse($blog->updated_at)->format('d/m/Y') }}</span></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12">
                        <div class="loading-more">
                            <!-- <i class="icon_loading"></i> -->
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End  -->
@endsection