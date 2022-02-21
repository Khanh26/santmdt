<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/santmdt/assets/css/layouts.css">
    <link rel="stylesheet" href="http://localhost/santmdt/assets/css/cart.css">
    <title>Trang chủ - Sàn Thương mại số 1 Việt Nam</title>
</head>

<body>
    <div class="wapper">
        <!-- header -->
        <?php include('../view/layout/client/header.php'); ?>
        <!-- End header -->

        <!-- Content -->

        <div class="content">
            <!-- <div class="breadcrumb">
                <ul class="breadcrumb-main">
                    <li class="item-breadcrumb"><a href="">Trang chủ</a></li>
                    <li class="item-breadcrumb"><i class="fas fa-angle-double-right"></i></li>
                    <li class="item-breadcrumb">Giỏ hàng</li>
                </ul>
            </div>
            <hr> -->

            <div class="main-content">
                <div class="header-cart">
                    <h4 class="heading-cart heading-content">giỏ hàng</h4>
                </div>
                <div class="body-cart">
                    <div class="heading-body-cart">
                        <div class="choose-all-product item-cart-heading">
                            <input type="checkbox" name="chooseAllProducts" id="chooseAllProducts">
                            <label for="">Tất cả sản phẩm</label>
                        </div>
                        <div class="price-one item-cart-heading">Đơn giá</div>
                        <div class="number item-cart-heading">Số lượng</div>
                        <div class="price item-cart-heading">Thành tiền</div>
                        <div class="btnDelete-block item-cart-heading">
                            <button class="btnDelete"><i class="far fa-trash-alt"></i></button>
                        </div>
                    </div>
                    <div class="content-body-cart">
                        <div class="item-cart">
                            <div class="choose-all-product item-cart-heading">
                                <input type="checkbox" name="chooseAllProducts" id="chooseAllProducts">
                                <label for=""  class="heading-product">
                                    <img src="http://localhost/santmdt/assets/img/maymocthietbi/dau-phun-ap-luc.jpg" alt="">

                                    <h4 class="title-product">Đầu phun áp lực</h4>
                                </label>
                            </div>
                            <div class="price-one item-cart-heading">asd</div>
                            <div class="number item-cart-heading">asd</div>
                            <div class="price item-cart-heading">asd</div>
                            <div class="btnDelete-block item-cart-heading">asd</div>
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

</body>

</html>