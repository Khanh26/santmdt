<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="http://localhost/santmdt/assets/img/logo1.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/santmdt/assets/css/layouts.css">
    <link rel="stylesheet" href="http://localhost/santmdt/assets/css/cart.css">
    <link rel="stylesheet" href="http://localhost/santmdt/assets/css/yeuthich.css">
    <link rel="stylesheet" href="http://localhost/santmdt/assets/css/sidebar.css">
    <link rel="stylesheet" href="http://localhost/santmdt/assets/css/thongtincanhan.css">
    <title>Trang chủ - Sàn Thương mại số 1 Việt Nam</title>
</head>

<body>
    <div class="wapper">
        <!-- header -->
        <?php include('../view/layout/client/header.php'); ?>
        <!-- End header -->

        <!-- Content -->
        <div class="content">
            <div class="breadcrumb">
                <ul class="breadcrumb-main">
                    <li class="item-breadcrumb"><a href="http://localhost/santmdt/">Trang chủ</a></li>
                    <li class="item-breadcrumb"><i class="fas fa-angle-double-right"></i></li>
                    <li class="item-breadcrumb">Thông tin cá nhân</li>
                </ul>
            </div>
            <hr>

            <div class="main-content">
                <!-- Sidebar -->
                <?php include('../view/layout/client/sidebar-member.php'); ?>
                <!-- End Sidebar -->
                <!-- chung css với cart nên tao để như vậy -->
                <div class="body-member">
                    <div class="header-cart">
                        <h4 class="heading-cart heading-content">Đơn hàng</h4>
                    </div>
                    <div class="body-order">
                        <div class="order">
                            <div class="search-order">
                                <form action="" class="form-search-favorite">
                                    <input type="text" name="inputSearchFavorite" id="inputSearchFavorite" class="input-Search-products" placeholder="Tìm kiếm sản phẩm yêu thích...">
                                    <button type="submit" class="btn-search-products">Tìm sản phẩm</button>
                                </form>
                            </div>

                            <div class="orders">
                                <div class="tabs-order">
                                    <button class="tab-order">Đang chờ</button>
                                    <button class="tab-order">Đang đóng gói</button>
                                    <button class="tab-order">Đang vận chuyện</button>
                                    <button class="tab-order">Đã nhận hàng</button>
                                </div>

                                <div class="product-orders">
                                    <div class="heading-body-cart">
                                        <div class="choose-all-product item-cart-heading">
                                            <input type="checkbox" name="chooseAllProducts" id="chooseAllProducts">
                                            <label for="">Tất cả sản phẩm</label>
                                        </div>
                                        <div class="price-one item-cart-heading">Đơn giá</div>
                                        <div class="number item-cart-heading">Số lượng</div>
                                        <div class="price item-cart-heading">Thành tiền</div>
                                        <div class="btnDelete-block item-cart-heading">

                                        </div>
                                    </div>
                                    <div class="content-body-cart">
                                        <div class="item-cart">
                                            <div class="choose-all-product item-cart-heading">
                                                <input type="checkbox" name="chooseAllProducts" class="chooseOneProduct">
                                                <label for="" class="heading-product">
                                                    <img src="http://localhost/santmdt/assets/img/sanpham/voibot.jpg" class="img-product" alt="">
                                                    <div class="information-product">
                                                        <a href="" class="title-product">Vôi Bột hàng chất lượng</a>
                                                        <a href="" class="shop-product">Cửa hàng: Shop Alone</a>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="price-one item-cart-heading">199.000</div>
                                            <div class="number item-cart-heading">
                                                1
                                            </div>
                                            <div class="price item-cart-heading">199.000</div>
                                            <div class="btnDelete-block item-cart-heading"><button class="btnDelete btnCancel" title="Xóa">Hủy</button></div>
                                        </div>
                                        <hr>
                                        <div class="item-cart">
                                            <div class="choose-all-product item-cart-heading">
                                                <input type="checkbox" name="chooseAllProducts" class="chooseOneProduct">
                                                <label for="" class="heading-product">
                                                    <img src="http://localhost/santmdt/assets/img/sanpham/may-cat-co-mishubishi-do.jpeg" class="img-product" alt="">
                                                    <div class="information-product">
                                                        <a href="" class="title-product">Máy cắt cỏ Mishubishi</a>
                                                        <a href="" class="shop-product">Cửa hàng: Shop Alone</a>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="price-one item-cart-heading">199.000</div>
                                            <div class="number item-cart-heading">
                                                1
                                            </div>
                                            <div class="price item-cart-heading">199.000</div>
                                            <div class="btnDelete-block item-cart-heading"><button class="btnDelete btnCancel">Hủy</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End content -->

        <!-- footer -->
        <?php include('../view/layout/client/footer.php'); ?>
        <!-- End footer -->
    </div>
    <script src="http://localhost/santmdt/assets/js/favorite.js"></script>
</body>

</html>