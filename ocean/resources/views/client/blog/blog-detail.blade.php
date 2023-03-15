@extends('client.layout.master')
@section('title', 'Blog detail')
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
                    <a href="#"></i>Bài viết</a>
                    <span>Chi tiết bài viết</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacumb Section End -->
<!-- Blog Detail Section Begin -->
<div class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details-inner">
                    <div class="blog-detail-title">
                        <h2>{{$blog->title}}</h2>
                        <p> <span>{{ \Carbon\Carbon::parse($blog->updated_at)->format('d/m/Y') }}</span></p>
                    </div>
                    <div class="blog-large-pic">
                        <img src="{{asset("client/img/blog/$blog->image")}}" alt="">
                    </div>
                    <div class="blog-detail-desc">
                        <p>{{$blog->subtitle}}</p>
                    </div>
                    <div class="blog-quote">
                        <p>{{$blog->content}}<span>- Nuoc hoa nam</span></p>
                    </div>
                    <div class="blog-more">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{asset('client/img/blog/blog-detail-2.png')}}" alt="">
                            </div>
                            <div class="col-sm-4">
                                <img src="{{asset('client/img/blog/blog-detail-3.png')}}" alt="">
                            </div>
                            <div class="col-sm-4">
                                <img src="{{asset('client/img/blog/blog-detail-4.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Detail Section End -->

@endsection