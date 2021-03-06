<?php
require_once __DIR__ . '../../../modules/model/Cart.php';
$cart = new Cart();
$array = $cart->getByKH($_SESSION['user']['ID_KH']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="http://localhost/santmdt/public/img/logo1.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/santmdt/public/css/cart.css">
    <link rel="stylesheet" href="http://localhost/santmdt/public/css/layouts.css">
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
                    <li class="item-breadcrumb"><a href="">Trang chủ</a></li>
                    <li class="item-breadcrumb"><i class="fas fa-angle-double-right"></i></li>
                    <li class="item-breadcrumb">Giỏ hàng</li>
                </ul>
            </div>
            <hr>

            <div class="main-content">
                <div class="header-cart">
                    <h4 class="heading-cart heading-content">giỏ hàng</h4>
                </div>
                <div class="body-cart">
                    <div class="search-favorite">
                        <form action="" class="form-search-favorite">
                            <input type="text" name="inputSearchFavorite" id="inputSearchFavorite" class="input-Search-products" placeholder="Tìm kiếm sản phẩm yêu thích...">
                            <button type="submit" class="btn-search-products">Tìm sản phẩm</button>
                        </form>
                    </div>
                    <div class="heading-body-cart">
                        <div class="choose-all-product item-cart-heading">
                            <input type="checkbox" name="chooseAllProducts" id="chooseAllProducts">
                            <label for="">Tất cả sản phẩm</label>
                        </div>
                        <div class="price-one item-cart-heading">Đơn giá</div>
                        <div class="number item-cart-heading">Số lượng</div>
                        <div class="price item-cart-heading">Thành tiền</div>
                        <div class="btnDelete-block item-cart-heading">
                            <button class="btnDelete" title="Xóa tất cả"><i class="far fa-trash-alt"></i></button>
                        </div>
                    </div>
                    <div class="content-body-cart">
                        <?php foreach ($array as $row) { ?>
                            <div class="item-cart">
                                <div class="choose-all-product item-cart-heading">
                                    <input type="checkbox" name="chooseAllProducts" class="chooseOneProduct">
                                    <label for="" class="heading-product">
                                        <img src="http://localhost/santmdt/public/img/sanpham/<?php echo $row['HINH'][0]['ten_hinh'] ?>" class="img-product" alt="">
                                        <div class="information-product">
                                            <a href="" class="title-product"><?php echo $row['TEN_SP'] ?></a>
                                            <a href="" class="shop-product">Cửa hàng: <?php echo $row['TEN_DANG_NHAP'] ?></a>
                                        </div>
                                    </label>
                                </div>
                                <div class="price-one item-cart-heading"><?php echo $row['GIA'][0]['GIA'] ?></div>
                                <div class="number item-cart-heading">
                                    <div class="block-number">
                                        <button class="btn-number-product btnDownProduct">-</button>
                                        <input type="text" name="" value="<?php echo $row['SL_SP_GH'] ?>" class="number-product">
                                        <button class="btn-number-product btnUpProduct">+</button>
                                    </div>
                                </div>
                                <div class="price item-cart-heading"><?php echo $row['SL_SP_GH'] * $row['GIA'][0]['GIA'] ?></div>
                                <div class="btnDelete-block item-cart-heading"><button class="btnDelete" title="Xóa"><i class="far fa-trash-alt"></i></button></div>
                            </div>
                            <hr>
                        <?php } ?>
                    </div>
                    <div class="btnCheckout-block">
                        <a href="http://localhost/santmdt/?router=thanhtoan" class="link-cart-checkout">MUA HÀNG</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End content -->

        <!-- footer -->
        <?php include('./view/client/layout/footer.php'); ?>
        <!-- End footer -->
    </div>
    <script src="http://localhost/santmdt/public/js/cart.js"></script>
</body>

</html>