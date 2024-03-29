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
                    </div>
                </div>
            </section>

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