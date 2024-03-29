<?php
ob_start();
?>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta charset="UTF-8" />
    <title>SỮA'S HOUSE</title>
    <meta name="description" />
    <meta name="keywords" />
    <link href="Uploads/shop2005/images/favicon.png" rel="shortcut icon" type="image/x-icon" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="fb:app_id" content="227481454296289" />

    <meta content="vi_VN" property="og:locale" />
    <meta content="website" property="og:type" />
    <meta content="SỮA'S HOUSE" property="og:title" />
    <meta property="og:description" />
    <meta content="http://runecom04.runtime.vn/Uploads/shop2005/images/logo.png" property="og:image" />
    <meta content="http://runecom04.runtime.vn/" property="og:url" />
    <meta content="SeaFood Store" property="og:site_name" />

    <style>
        .loader_overlay {
            position: fixed;
            z-index: 9999;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-color: #fff;
            -webkit-transition: all .1s ease;
            -o-transition: all .1s ease;
            transition: all .1s ease;
            opacity: 1;
            visibility: visible;
        }

        .loader_overlay.loaded {
            opacity: 0;
            visibility: hidden;
            z-index: -2;
        }
    </style>
    <!--CSS-->
    <link rel="stylesheet" href="assets/100004/js/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/100004/fonts/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="assets/100004/fonts/fonts-master/roboto.css">
    <!--JS-->
    <script src="assets/100004/js/plugin42e7.js?v=582"></script>
    <script src="assets/100004/js/option_selection.js"></script>
    <script src="assets/100004/js/api.jquery.js"></script>
    <!-- Đặt thẻ này vào phần đầu hoặc ngay trước thẻ đóng phần nội dung của bạn. -->
    <script src="../apis.google.com/js/platform.js" async="" defer=""></script>
    <script async="" defer="defer" data-target=".product-resize" data-parent=".products-resize" data-img-box=".image-resize" src="assets/100004/js/fixheightproductv242e7.js?v=582"></script>
    <script src="assets/100004/js/scripts42e7.js?v=582"></script>
    <script src="Scripts/common/mycard.js" type="text/javascript"></script>
    <script src="Scripts/lazyLoad/jquery.lazyload.min.js" type="text/javascript"></script>

    <script src="Scripts/angularJS/angular.min.js"></script>
    <script src="Scripts/angularJS/angular-sanitize.min.js"></script>
    <script type="text/javascript" src="Scripts/angular-loading-spinner/spin.min.js"></script>
    <script type="text/javascript" src="Scripts/angular-loading-spinner/angular-spinner.min.js"></script>
    <script type="text/javascript" src="Scripts/angular-loading-spinner/angular-loading-spinner.js"></script>
    <script src="app/appMain.js"></script>
    <script src="app/directives/directive.js"></script>
    <script src="app/directives/angular-summernote.js"></script>
    <script src="app/directives/paging.js"></script>
    <script src="app/services/ajaxServices.js"></script>
    <script src="app/services/alertsServices.js"></script>
    <link href="assets/100004/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/100004/responsive.css" rel="stylesheet" type="text/css" />
</head>

<body ng-app="appMain" cz-shortcut-listen="true">
    <div class="loader_overlay"></div>
    <div class="wrapper">

        <div class="header">

            <script src="Scripts/common/login.js" type="text/javascript"></script>
            <section class="top-link clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav navbar-nav topmenu-contact pull-left">
                                <li><i class="fa fa-phone"></i> <span>Hotline: 038 941 5925</span></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm">
                                <li class="order-home"><a href="index.php"><i class="fa fa-home"></i> Trang chủ</a></li>
                                <li class="order-check"><a href="kiem-tra-don-hang.php"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                                <li class="order-cart"><a href="gio-hang.php"><i class="fa fa-shopping-cart"></i> Giỏ
                                        hàng</a></li>
                                <?php
                                if (isset($_SESSION["UserID"])) {
                                    echo " <li class='account-logout'><a href='dang-xuat.php'><i class='fa fa-sign-out'></i> Đăng xuất </a></li>";
                                } else {
                                    echo "<li class='account-login'><a href='dang-nhap.php'><i class='fa fa-sign-in'></i>Đăng nhập</a></li>";
                                }
                                ?>

                                <li><a type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#registerModal">
                                        Đăng ký
                                    </a>
                                </li>
                                <li><a class="btn btn-ouline-info" href="admin.php">Trang quản lý</a></li>
                            </ul>
                            <div class="show-mobile hidden-lg hidden-md">
                                <div class="quick-user">
                                    <div class="quickaccess-toggle">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="inner-toggle">
                                        <ul class="login links">
                                            <li>
                                                <?php
                                                if (isset($_SESSION["UserName"])) {
                                                    echo "<li><a href='dang-xuat.php'>Đăng xuất</a></li>";
                                                } else {
                                                    echo "<li><a href='dang-nhap.php'>Đăng nhập</a></li>";
                                                }
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="quick-access">
                                    <div class="quickaccess-toggle">
                                        <i class="fa fa-list"></i>
                                    </div>
                                    <div class="inner-toggle">
                                        <ul class="links">
                                            <li><a id="mobile-wishlist-total" href="kiem-tra-don-hang.php" class="wishlist"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn
                                                    hàng</a></li>
                                            <li><a href="gio-hang.php" class="shoppingcart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="header">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-8">
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-4 hidden-xs">
                                <!-- Search -->
                                <div class="search_box">
                                    <div class="search_wrapper">
                                        <input type="text" name="search" class="index_input_search" id="txtsearch" onblur="if(this.value=='')this.value='Nhập từ khóa tìm kiếm...'" onfocus="if(this.value=='Nhập từ khóa tìm kiếm...')this.value=''" value="Nhập từ kh&#243;a t&#236;m kiếm..." />
                                        <button class="btn_search_submit btn " type="button" id="btnsearch"><span><img src="assets/100004/images/icon_lookup.png" alt="search"></span></button>
                                    </div>
                                </div>
                                <!-- End Search -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <!-- Cart -->
                                <div class="cart_header">
                                    <a href="gio-hang.php" title="Giỏ hàng">
                                        <span class="cart_header_icon">
                                            <img src="assets/100004/images/cart42e7.png" alt="Responsive image">
                                        </span>
                                        <span class="box_text">
                                            <strong class="cart_header_count">Giỏ hàng <span>(0)</span></strong>
                                            <span class="cart_price">0₫</span>
                                        </span>
                                    </a>
                                    <div class="cart_clone_box">
                                        <div class="cart_box_wrap hidden">
                                            <div class="cart_item original clearfix">
                                                <div class="cart_item_image"></div>
                                                <div class="cart_item_info">
                                                    <p class="cart_item_title">
                                                        <a href="#" title=""></a>
                                                    </p>
                                                    <span class="cart_item_quantity"></span>
                                                    <span class="cart_item_price"></span>
                                                    <span class="remove"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart_header_top_box">
                                        <div class="cart_empty">Giỏ hàng của bạn vẫn chưa có sản phẩm nào.</div>
                                    </div>
                                </div>
                                <!-- End Cart -->
                                <!-- Account -->
                                <div class="user_login">
                                    <div class="user_login_icon"><img src="assets/100004/images/user42e7.png" alt="Responsive image"></div>
                                    <div class="box_text">
                                        <strong>Tài khoản</strong>
                                        <!--<span class="cart_price">Đăng nhập, đăng ký</span>-->
                                    </div>
                                    <div class="user_box">
                                        <ul>
                                            <li><a href="dang-nhap.php">Đăng nhập</a></li>
                                            <li><a href="dang-ky.php">Đăng ký</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End account -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <nav class="navbar-main">
                <div id="mb_mainnav">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-xs-12 vertical_menu">
                                <div id="mb_verticle_menu" class="menu-quick-select">
                                    <div class="title_block" style="margin-left: 0px; width: 220.675px;">
                                        <span>Danh mục sản phẩm</span>
                                    </div>
                                    <div id="menuverti" class="block_content navbar_menuvertical">
                                        <ul class='nav_verticalmenu' style="margin-left: 0px; width: 220.675px;">
                                            <li class="has-child level0">
                                                <a class=''><img class='icon-menu' src='Uploads/shop2005/images/icon/s1.png' alt='Thời trang bầu'>
                                                    <span>Thời trang cho mẹ</span></a>
                                                <ul class='level1'>
                                                    <li class="level1"><a class='' href='quan-ao-bo-ba-bau.html'><span>Quần áo bà
                                                                bầu</span></a></li>
                                                    <li class="level1"><a class='' href='vay-cho-me.html'><span>Váy</span></a></li>
                                                    <li class="level1"><a class='' href='ao-cho-me.html'><span>Áo</span></a></li>
                                                </ul class='level1'>
                                            </li>
                                            <li class="has-child level0">
                                                <a class=''><img class='icon-menu' src='Uploads/shop2005/images/icon/s2.png' alt='Thời trang sơ sinh'> <span>Thời trang sơ sinh</span></a>
                                                <ul class='level1'>
                                                    <li class="level1"><a class='' href='quan-ao-bo-so-sinh.html'><span>Quần áo bộ</span></a>
                                                    </li>
                                                    <li class="level1"><a class='' href='vo-khau-trang.html'><span>Vớ,
                                                                khẩu trang, khăn voan</span></a></li>
                                                    <li class="level1"><a class='' href='yem-ta.html'><span>Yếm, tã
                                                                vải</span></a></li>
                                                    <li class="level1"><a class='' href='non-bao-tay.html'><span>Nón,
                                                                Bao tay chân</span></a></li>
                                                </ul class='level1'>
                                            </li>
                                            <li class="has-child level0">
                                                <a class=''><img class='icon-menu' src='Uploads/shop2005/images/icon/s3.png' alt='Thời trang bé gái'> <span>Thời trang bé gái</span></a>
                                                <ul class='level1'>
                                                    <li class="level1"><a class='' href='quan-ao-bo-be-gai.html'><span>Quần áo bộ</span></a>
                                                    </li>
                                                    <li class="level1"><a class='' href='vay-be-gai.html'><span>Váy</span></a></li>
                                                    <li class="level1"><a class='' href='giay-dep-be-gai.html'><span>Giày dép,
                                                                sandal</span></a></li>
                                                </ul class='level1'>
                                            </li>
                                            <li class="has-child level0">
                                                <a class=''><img class='icon-menu' src='Uploads/shop2005/images/icon/s4.png' alt='Thời trang bé trai'> <span>Thời trang bé trai</span></a>
                                                <ul class='level1'>
                                                    <li class="level1"><a class='' href='quan-ao-bo-be-trai.html'><span>Quần áo bộ</span></a>
                                                    </li>
                                                    <li class="level1"><a class='' href='non-be-trai.html'><span>Nón</span></a></li>
                                                    <li class="level1"><a class='' href='giay-dep-be-trai.html'><span>Giày dép,
                                                                sandal</span></a></li>
                                                </ul class='level1'>
                                            </li>
                                        </ul class='nav_verticalmenu'>
                                    </div>
                                </div>
                            </div>
                            <nav class="col-md-9 col-sm-12 col-xs-12 p-l-0">
                                <ul class='menu nav navbar-nav menu_hori'>
                                    <li class="level0"><a class='' href='index.php'><span>Trang chủ</span></a></li>
                                    <li class="level0"><a class=''><span>Giới thiệu</span></a>
                                    </li>
                                    <li class="level0"><a class=''><span>Tin tức</span></a></li>
                                    <li class="level0"><a class=''><span>Liên hệ</span></a></li>
                                </ul class='menu nav navbar-nav menu_hori'>
                            </nav>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Modal -->
            <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registerModalLabel">Đăng ký tài khoản</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="./register-process.php" method="POST">
                                <div class="form-group">
                                    <label for="UserName">Tên đăng nhập</label>
                                    <input type="text" name="UserName" class="form-control" id="username" placeholder="Tên đăng nhập">
                                </div>
                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <input type="text" name="Address" class="form-control" id="Address" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <label for="PhoneNumber">Phone Number</label>
                                    <input type="number" name="PhoneNumber" class="form-control" id="PhoneNumber" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="Email" class="form-control" id="Email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" name="Password" class="form-control" id="password" placeholder="Mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label for="confirm-password">Xác nhận mật khẩu</label>
                                    <input type="password" name="ConfirmPassword" class="form-control" id="confirm-password" placeholder="Xác nhận mật khẩu">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">Đăng ký</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- End header -->