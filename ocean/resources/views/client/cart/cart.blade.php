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
                    <span>Giỏ hàng</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacumb Section End -->
<!-- Shopping Cart Section Begin  -->
<div class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th class="p-name">Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th><i class="ti-close"></i></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="cart-pic first-row"><img style="max-width: 50%" src="client/img/cart-page/nuochoa-1.jpg" alt=""></td>
                                <td class="cart-title first-row">
                                    <h5>Pure Pineapple</h5>
                                </td>
                                <td class="p-price first-row">$60.00</td>
                                <td class="qua-col first-row">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price first-row">$60.00</td>
                                <td class="close-td first-row"><i class="ti-close"></i></td>
                            </tr>
                            <tr>
                                <td class="cart-pic"><img style="max-width: 50%" src="client/img/cart-page/nuochoa-2.jpg" alt=""></td>
                                <td class="cart-title">
                                    <h5>Pure Pineapple</h5>
                                </td>
                                <td class="p-price">$60.00</td>
                                <td class="qua-col">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price">$60.00</td>
                                <td class="close-td"><i class="ti-close"></i></td>
                            </tr>
                            <tr>
                                <td class="cart-pic"><img style="max-width: 50%" src="client/img/cart-page/nuochoa-3.jpg" alt=""></td>
                                <td class="cart-title">
                                    <h5>Pure Pineapple</h5>
                                </td>
                                <td class="p-price">$60.00</td>
                                <td class="qua-col">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price">$60.00</td>
                                <td class="close-td"><i class="ti-close"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <!-- <div class="cart-buttons">
                            <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                            <a href="#" class="primary-btn up-cart">Update Cart</a>
                        </div> -->
                        <!-- <div class="discount-coupon">
                            <h6>Discount Codes</h6>
                            <form action="#" class="coupon-form">
                                <input type="text" placeholder="Enter your codes">
                                <button type="submit" class="site-btn coupon-btn">Apply</button>
                            </form>
                        </div> -->
                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <ul>
                                <!-- <li class="subtotal">Tổng phụ <span>$240.00</span></li> -->
                                <li class="cart-total">Thành tiền <span>$240.00</span></li>
                            </ul>
                            <a href="{{ url('checkOut') }}" class="proceed-btn">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shopping Cart Section End  -->

@endsection