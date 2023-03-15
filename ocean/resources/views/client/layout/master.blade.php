<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/themify-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Start coding here -->

    <!-- Page PreLoader  -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope"></i>
                        nuochoanam@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                        0387618200
                    </div>
                </div>
                <div class="ht-right">
                    <a href="{{ url('login') }}" class="login-panel"><i class="fa fa-user"></i> Login</a>
                    <!-- <div class="lan-selector">
                        <select style="width: 300px" name="countries" id="countries" class="language_drop">
                            <option value="yt" data-image="client/img/flag-1.jpg" data-imagecss="flag yt" data-title="English">
                                English</option>
                            <option value="yu" data-image="client/img/flag-2.jpg" data-imagecss="flag yu" data-title="Bangladesh">Germany</option>
                        </select>
                    </div> -->
                    <div class="top-social">
                        <a href="https://www.facebook.com/videobongdamoi/"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <!-- <a href="#"><i class="ti-linkedin"></i></a> -->
                        <!-- <a href="#"><i class="ti-pinterest"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header" style="padding:12px 0px">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo" style="text-align: center;">
                            <a href="{{url('home')}}">
                                <img src='{{asset("client/img/NUOCHOANAM.png")}}' height="75" width="75" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7" style="
    /* height: auto; */
    padding-top: 25px;
">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">Tìm sản phẩm</button>
                            <div class="input-group">
                                <input type="text" placeholder="Nhập tên sản phẩm">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right" style="
    padding-top: 25px;
">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="client/img/products/nuochoa-1.jpg" width="100" height="50" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>1.000.000 X 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img src="client/img/products/nuochoa-2.jpg" width="100" height="50" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>900.000 X 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span style="color: black">Tổng tiền:</span>
                                        <h5 style="color: black">1.999.000</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="{{url('cart')}}" class="primary-btn view-card">Đến giỏ hàng</a>
                                        <a href="{{ url('checkout') }}" class="primary-btn checkout-card" style="background-color: black; color: white">Thanh toán</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">1.500.000đ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @yield('navitem')
    </header>
    <!-- Header Section End -->

    <!-- Body -->
    @yield('content')
    <!-- End Body  -->

    

    <!-- Footer Section Begin  -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="{{url('home')}}">
                                <img src="client/img/footer-logo.png" height="25" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>Nguyen Van Linh . HCM</li>
                            <li>Phone: 0387618200</li>
                            <li>Email: phamtienthuong@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Thông tin</h5>
                        <ul>
                            <li><a href="">Về chúng tôi</a></li>
                            <li><a href="">Thanh toán</a></li>
                            <li><a href="">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Tài khoản</h5>
                        <ul>
                            <li><a href="">Tài khoản của tôi</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Giỏ hàng</a></li>
                            <li><a href="">Cửa hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Đăng ký để nhận ưu đãi qua email:</h5>
                        <!-- <p>Nhận thông tin cập nhật qua email về cửa hàng mới nhất của chúng tôi và các ưu đãi đặc biệt.</p> -->
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Nhập email">
                            <button type="button">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright
                            <script>
                                document.write(new Date().getFullYear());
                            </script>All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://Codelearn.vn" target="_blank">Nuochoanam</a>
                            <div class="payment-pic">
                                <img src="client/img/payment-method.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End  -->

    <!-- Js Plugins -->
    <script src="{{ asset('client/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.dd.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('client/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('client/js/main.js') }}"></script>
</body>

</html>