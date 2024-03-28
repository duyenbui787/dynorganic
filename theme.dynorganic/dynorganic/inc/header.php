<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dyn Organic</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/reset.css">
    <link rel="stylesheet" href="public/global.css">
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="public/responsive.css">

    <!-- Carousel -->
    <link rel="stylesheet" href="public/js/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="public/js/owlcarousel/assets/owl.theme.default.min.css">

    <script src="public/js/owlcarousel/owl.carousel.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div id="site">
        <div id="header-wp">
            <div id="top-banner">
                <img src="public/img/bg-top.png" alt="">
                <div class="container  banner-text">
                    <div class="d-flex justify-content-between">
                        <p style="visibility:hidden" class="d-none d-sm-block">aa</p>
                        <p>Giao hàng miễn phí cho đơn hàng từ 1.000.000Đ</p>
                        <div class="login-wp">
                            <i class="fa-solid fa-lock"></i>
                            <a href="?page=login">Login/Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="header" class="d-flex align-items-center justify-content-center">
                <div class="container">
                    <div class="row no-gutter justify-content-between align-items-center header-inner">
                        <div class="menu-more col-3 d-md-none">
                            <div id="toggle" style="color:#000">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                            <div id="icon-delete" style="color:#000;font-size: 18px;">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                            <div class="menu-responsive">
                                <div class="menu-responsive-inner">
                                    <ul class="list-item-menu">
                                        <li><a href="?page=home">Trang chủ</a></li>
                                        <li>
                                            <a href="?page=product" class="menu-item d-flex justify-content-between">
                                                <span>Sản phẩm</span>
                                                <span><i class="fa-solid fa-angle-right"></i></span>
                                            </a>
                                            <ul class="sub-menu d-none">
                                                <li><a href="?page=product-category">Thải độc</a></li>
                                                <li><a href="?page=product-category">Tăng cường miễn dịch</a></li>
                                                <li><a href="?page=product-category">Tiêu hóa</a></li>
                                                <li><a href="?page=product-category">Xương khớp</a></li>
                                                <li><a href="?page=product-category">Chống lão hóa</a></li>
                                                <li><a href="?page=product-category">Vitamin</a></li>
                                                <li><a href="?page=product-category">Protein</a></li>
                                                <li><a href="?page=product-category">Tóc-Móng-Da</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" class="menu-item d-flex justify-content-between brand">
                                                <span>Thương hiệu</span>
                                                <span><i class="fa-solid fa-angle-right"></i></span>
                                            </a>
                                            <ul class="sub-menu d-none">
                                                <li><a href="?page=brands">Food To Live</a></li>
                                                <li><a href="?page=brands">Oatsome</a></li>
                                                <li><a href="?page=brands">Sunwarrior</a></li>
                                                <li><a href="?page=brands">Country Farms </a></li>
                                                <li><a href="?page=brands">Sproos Life</a></li>
                                                <li><a href="?page=brands">Dr.Mercola</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="?page=blog" class="menu-item d-flex justify-content-between">
                                                <span>Kiến thức</span>
                                                <span><i class="fa-solid fa-angle-right"></i></span>
                                            </a>
                                            <ul class="sub-menu d-none test">
                                                <li><a href="">Kiến thức chăm sóc cơ thể</a></li>
                                                <li><a href="">Kiến thức chăm sóc da</a></li>
                                                <li><a href="">Kiến thức dinh dưỡng</a></li>
                                                <li><a href="">Review sản phẩm</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3" id="header-logo">
                            <a href="?page=home" id="logo" class="d-flex align-items-center">
                                <img src="public/img/logo/Icon-Vegan 1.png" alt="">
                                <span style="font-size: 23px; font-weight: 600;letter-spacing: 2px;color:#000">DYN
                                    ORGANIC</span>
                            </a>
                        </div>
                        <div class="col-sm-3 col-md-6 d-md-block d-none" id="main-menu-wp">
                            <nav>
                                <ul class="main-menu d-none d-md-flex align-items-center">
                                    <li class="active">
                                        <a href="?page=home">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a href="?page=product">Sản phẩm</a>
                                        <ul class="sub-menu active">
                                            <li>
                                                <a href="?page=product-category">Thải độc</a>
                                                <a href="?page=product-category">Tăng cường miễn dịch</a>
                                                <a href="?page=product-category">Tiêu hóa</a>
                                                <a href="?page=product-category">Xương khớp</a>
                                                <a href="?page=product-category">Chống lão hóa</a>
                                                <a href="?page=product-category">Vitamin</a>
                                                <a href="?page=product-category">Protein</a>
                                                <a href="?page=product-category">Tóc-Móng-Da</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="" class="brand">Thương hiệu</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="?page=brands">Food To Live</a>
                                                <a href="?page=brands">Oatsome</a>
                                                <a href="?page=brands">Sunwarrior</a>
                                                <a href="?page=brands">Country Farms </a>
                                                <a href="?page=brands">Sproos Life</a>
                                                <a href="?page=brands">Dr.Mercola</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="?page=blog">Kiến thức</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="?page=blog-children">Kiến thức chăm sóc cơ thể</a>
                                                <a href="?page=blog-children">Kiến thức chăm sóc da</a>
                                                <a href="?page=blog-children">Kiến thức dinh dưỡng</a>
                                                <a href="?page=blog-children">Review sản phẩm</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-3 col-md-3 col-sm-3" id="header-right-wp">
                            <ul id="nav-right" class="d-flex d-md-none" style="text-align:end">
                                <li class="search-res">
                                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                                    <div class="search-wp">
                                        <form action="" id="search" class="">
                                            <input type="text" id="s" placeholder="Nhập sản phẩm bạn cần tìm?">
                                            <button><img src="public/img/icon/icon _search.png" alt=""></button>
                                        </form>
                                    </div>
                                </li>
                                <li class="cart-wp">
                                    <div id="cart">
                                        <a href="?page=cart"><img src="public/img/icon/shopping-cart.png" alt=""></a>
                                        <span class="num">1</span>
                                    </div>
                                    <div id="empty-cart-dropdown" class="d-none">
                                        <p style="margin-bottom:0">Chưa có sản phẩm trong giỏ hàng</p>
                                    </div>
                                    <div id="cart-dropdown">
                                        <ul id="list-cart">
                                            <li>
                                                <a href="" class=thumb>
                                                    <img src="public/img/USA-Omega3-60ct-Front_1800x1800-450x450 5.png"
                                                        alt="">
                                                </a>
                                                <div class="info">
                                                    <a href="" class="product-name">Omega 3 từ tảo Sunwarrior Vegan
                                                        DHA
                                                        & EPA <span>x1</span></a>
                                                    <div class="price">
                                                        <span class="new-price">990.000đ</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="total-price-wp d-flex justify-content-center">
                                            <p>Tạm tính: <span class="total-price">990.000đ</span></p>
                                        </div>
                                        <div class="cart-button" style="margin-top:20px">
                                            <a href="?page=cart" class="button" style="margin-bottom:9px">Xem giỏ
                                                hàng</a>
                                            <a href="?page=checkout" class="button">Thanh toán</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul id="header-right" class="d-none d-md-flex">
                                <li class="btn-search">
                                    <form action="" id="search">
                                        <input type="text" id="s" placeholder="Nhập sản phẩm bạn cần tìm?">
                                        <button><img src="public/img/icon/icon _search.png" alt=""
                                                style="width: 38px;"></button>
                                    </form>
                                </li>
                                <li class="cart-wp">
                                    <div id="cart">
                                        <a href="?page=cart">
                                            <img src="public/img/icon/icon-cart.png" alt="" style="width: 25px;">
                                        </a>
                                        <span class="num">1</span>
                                    </div>
                                    <div id="empty-cart-dropdown" class="d-none">
                                        <p style="margin-bottom:0">Chưa có sản phẩm trong giỏ hàng</p>
                                    </div>
                                    <div id="cart-dropdown">
                                        <ul id="list-cart">
                                            <li>
                                                <a href="" class=thumb>
                                                    <img src="public/img/USA-Omega3-60ct-Front_1800x1800-450x450 5.png"
                                                        alt="">
                                                </a>
                                                <div class="info">
                                                    <a href="" class="product-name">Omega 3 từ tảo Sunwarrior Vegan
                                                        DHA
                                                        & EPA <span>x1</span></a>
                                                    <div class="price">
                                                        <span class="new-price">990.000đ</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="total-price-wp d-flex justify-content-center">
                                            <p>Tạm tính: <span class="total-price">990.000đ</span></p>
                                        </div>
                                        <div class="cart-button" style="margin-top:20px">
                                            <a href="?page=cart" class="button" style="margin-bottom:9px">Xem giỏ
                                                hàng</a>
                                            <a href="?page=checkout" class="button">Thanh toán</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="jquery.min.js"></script>
    <script src="public/js/owlcarousel/owl.carousel.min.js"></script>
    <script src="public/js/main.js" type="text/javascript"></script>
</body>
</html>