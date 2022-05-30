<?php
require_once __DIR__ . '../../../modules/model/Products.php';
$products = new Products();
$array = $products->getAllByNBL($_SESSION['user']['ID_NBL']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="http://localhost/santmdt/public/img/logo1.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/santmdt/public/css/layouts.css">
    <link rel="stylesheet" href="http://localhost/santmdt/public/css/cart.css">
    <link rel="stylesheet" href="http://localhost/santmdt/public/css/yeuthich.css">
    <link rel="stylesheet" href="http://localhost/santmdt/public/css/sidebar.css">
    <link rel="stylesheet" href="http://localhost/santmdt/public/css/thongtincanhan.css">
    <title>Trang chủ - Sàn Thương mại số 1 Việt Nam</title>
</head>

<body>
    <div class="wapper">
        <!-- header -->
        <?php include('./view/client/layout/header.php'); ?>
        <!-- End header -->

        <!-- Content -->
        <div class="content">
            <div class="breadcrumb">
                <ul class="breadcrumb-main">
                    <li class="item-breadcrumb"><a href="http://localhost/santmdt/">Trang chủ</a></li>
                    <li class="item-breadcrumb"><i class="fas fa-angle-double-right"></i></li>
                    <li class="item-breadcrumb">Sản phẩm cửa hàng</li>
                </ul>
            </div>
            <hr>

            <div class="main-content">
                <!-- Sidebar -->
                <?php include('./view/client/layout/sidebar-nhabanle.php'); ?>
                <!-- End Sidebar -->
                <!-- chung css với cart nên tao để như vậy -->
                <div class="body-member">
                    <div class="header-cart">
                        <h4 class="heading-cart heading-content">Đơn hàng của tôi</h4>
                    </div>
                    <div class="body-order">
                        <div class="order">
                            <div class="search-order">
                                <form action="" class="form-search-favorite">
                                    <input type="text" name="inputSearchFavorite" id="inputSearchFavorite" class="input-Search-products" placeholder="Tìm kiếm sản phẩm yêu thích...">
                                    <button type="submit" class="btn-search-products">Tìm sản phẩm</button>
                                </form>
                            </div>

                        </div>

                        <div class="order">
                            <a href="http://localhost/santmdt/?router=sanpham-cuahang-them" class="btnAdd">Thêm mới</a>
                        </div>

                        <div class="orders">
                            <div class="product-orders">
                                <div class="heading-body-cart">
                                    <div class="choose-all-product item-cart-heading">
                                        <input type="checkbox" name="chooseAllProducts" id="chooseAllProducts">
                                        <label for="">Tất cả sản phẩm</label>
                                    </div>
                                    <div class="price-one item-cart-heading">Đơn giá</div>
                                    <div class="number item-cart-heading">Số lượng</div>
                                    <div class="btnDelete-block item-cart-heading">

                                    </div>
                                </div>
                                <hr>
                                <div class="content-body-cart">
                                    <?php
                                    foreach ($array as $row) {
                                    ?>
                                        <div class="item-cart">
                                            <div class="choose-all-product item-cart-heading">
                                                <input type="checkbox" name="chooseAllProducts" class="chooseOneProduct">
                                                <label for="" class="heading-product">
                                                    <img src="http://localhost/santmdt/public/img/sanpham/<?php echo $row['HINH'][0]['ten_hinh'] ?>" class="img-product" alt="">
                                                    <div class="information-product">
                                                        <a href="" class="title-product"><?php echo $row['TEN_SP'] ?></a>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="price-one item-cart-heading"><?php echo $row['GIA'][0]['GIA'] ?></div>
                                            <div class="number item-cart-heading">
                                            <?php echo $row['SOLUONG_SP'] ?>
                                            </div>
                                            <div class="btnDelete-block item-cart-heading">
                                                <a href="http://localhost/santmdt/?router=sanpham-chitiet?id=<?php echo $row['ID_SP'] ?>" class="btnDelete btnDetail w-content">Chi tiết</a>
                                                <span>|</span>
                                                <a href="http://localhost/santmdt/?router=sanpham-xoa?id=<?php echo $row['ID_SP'] ?>" class="btnDelete btnCancel w-content">Xoá</a>
                                            </div>
                                        </div>
                                    <?php } ?>
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
    <?php include('./view/client/layout/footer.php'); ?>
    <!-- End footer -->
    </div>
    <script src="http://localhost/santmdt/public/js/favorite.js"></script>
    <script src="http://localhost/santmdt/public/js/orders.js"></script>
</body>

</html>