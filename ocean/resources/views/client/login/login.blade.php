@extends('client.layout.master')
@section('title', 'Login')
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
<!-- Breacumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home"></i>Trang chủ</a>
                    <span>Login</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacumb Section End -->
<!-- Login Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Đăng nhập</h2>
                    <form action="#">
                        <div class="group-input">
                            <label for="username">Tài khoản</label>
                            <input type="text" id="username">
                        </div>
                        <div class="group-input">
                            <label for="pass">Mật khẩu *</label>
                            <input type="text" id="pass">
                        </div>
                        <div class="group-input gi-check">
                            <div class="gi-more">
                                <label for="save-pass">
                                    Nhớ mật khẩu
                                    <input type="checkbox" id="save-pass">
                                    <span class="checkmark"></span>
                                </label>
                                <a href="#" class="forget-pass">Quên mật khẩu?</a>
                            </div>
                        </div>
                        <button type="submit" class="site-btn login-btn">Đăng nhập</button>
                    </form>
                    <div class="switch-login">
                        <a href="{{ url('register') }}" class="or-login">Tạo tài khoản</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Section End -->


@endsection