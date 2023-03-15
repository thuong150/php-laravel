@extends('client.layout.master')
@section('title', 'Cart')
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
                    <a href="index.html"></i>Giỏ hàng</a>
                    <span>Thanh toán</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacumb Section End -->
<!-- Shopping Cart Section Begin  -->
<!-- Shopping Cart Section Begin -->
<div class="checkout-section spad">
    <div class="container">
        <form action="#" class="checkout-form">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="checkout-content">
                        <a href="login.html" class="content-btn">Đăng nhập</a>
                    </div>
                    <h4>Thông tin khách hàng</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fir">Họ <span>*</span></label>
                            <input type="text" id="fir">
                        </div>
                        <div class="col-lg-6">
                            <label for="last">Tên <span>*</span></label>
                            <input type="text" id="last">
                        </div>
                        <div class="col-lg-12">
                            <label for="cun-name">Tỉnh/Thành phố <span>*</span></label>
                            <input type="text" id="cun-name">
                        </div>
                        <div class="col-lg-12">
                            <label for="cun">Phường/Xã <span>*</span></label>
                            <input type="text" id="cun">
                        </div>
                        <div class="col-lg-12">
                            <label for="street">Đường <span>*</span></label>
                            <input type="text" id="street" class="street first">
                        </div>
                        <!-- <div class="col-lg-12">
                            <label for="zip">Postcode / ZIP (optional)<span>*</span></label>
                            <input type="text" id="zip">
                        </div>
                        <div class="col-lg-12">
                            <label for="town">Town / City<span>*</span></label>
                            <input type="text" id="town">
                        </div> -->
                        <div class="col-lg-6">
                            <label for="email">Email<span>*</span></label>
                            <input type="text" id="email">
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">Số điện thoại<span>*</span></label>
                            <input type="text" id="phone">
                        </div>
                        <!-- <div class="col-lg-12">
                            <div class="create-item">
                                <label for="acc-create">
                                    Create an account?
                                    <input type="checkbox" id="acc-create">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="checkout-content">
                        <input type="text" placeholder="Nhập mã giảm giá">
                    </div>
                    <div class="place-order">
                        <h4>Đơn hàng của bạn</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Product <span>Total</span></li>
                                <li class="fw-normal">Sản phẩm 1 x 1 <span>$60.00</span></li>
                                <li class="fw-normal">Sản phẩm 2 x 2 <span>$60.00</span></li>
                                <li class="fw-normal">Sản phẩm 3 x 1 <span>$120.00</span></li>
                                <li class="fw-normal">Tổng <span>$240.00</span></li>
                                <li class="total-price">Thành tiền <span>$240.00</span></li>
                            </ul>
                            <div class="payment-check">
                                <div class="pc-item">
                                    <label for="pc-check">
                                        Thanh toán khi nhận hàng
                                        <input type="checkbox" id="pc-check">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="pc-item">
                                    <label for="pc-paypal">
                                        Paypal
                                        <input type="checkbox" id="pc-paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="pc-item">
                                    <label for="pc-momo">
                                        Momo
                                        <input type="checkbox" id="pc-momo">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Shopping Cart Section End -->

@endsection