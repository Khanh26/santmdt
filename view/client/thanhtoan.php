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
    <link rel="stylesheet" href="http://localhost/santmdt/public/css/thanhtoan.css">
    <title>Trang chủ - Sàn Thương mại số 1 Việt Nam</title>
</head>

<body>
    <div class="wapper">
        <!-- header -->
        <?php include('./view/client/layout/header.php'); ?>
        <!-- End header -->

        <!-- Content -->
        <div class="content">
            <div class="block-main">
                <div class="info-main">
                    <div class="heading-checkout">Thông tin người nhận</div>
                    <div class="body-checkout">
                        <div class="d-input">
                            <label>Họ tên: </label>
                            <input type="text" class="input-checkout" value="<?php echo $_SESSION['user']['HOTEN']?>" disabled>
                        </div>
                        <div class="d-input">
                            <label>Địa chỉ: </label>
                            <input type="text" class="input-checkout" value="">
                        </div>
                        <div class="d-input">
                            <label>Email: </label>
                            <input type="text" class="input-checkout" value="<?php echo $_SESSION['user']['EMAIL']?>" disabled>
                        </div>
                        <div class="d-input">
                            <label>Số điện thoại: </label>
                            <input type="text" class="input-checkout" value="<?php echo $_SESSION['user']['SDT']?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="order">
                    <div class="heading-checkout">Đơn hàng</div>
                    <div class="body-checkout">
                        <table id="table-checkout">
                            <thead>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th> 
                            </thead>
                            
                            <tbody>
                            
                                <?php $sum = 0;
                                foreach($array as $row) { 
                                    $sum = $sum + $row['SL_SP_GH']*$row['GIA'][0]['GIA'];
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $row['TEN_SP'] ?></td>
                                        <td><?php echo $row['SL_SP_GH'] ?></td>
                                        <td><?php echo $row['GIA'][0]['GIA'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="footer-checkout">
                        <div class="block-total-price">Tổng tiền: <span class="total-price"><?php echo $sum ?></span></div>
                        <div class="block-method-checkout">
                        <div class="heading-checkout">Phương thức thanh toán</div>
                            <div class="item-method-checkout"><input type="radio" class="method-checkout" name="method" value="1" id="input-checkout-online" checked> <label for="input-checkout-online">Thanh toán tiền mặt</label></div>
                            <div class="item-method-checkout"><input type="radio" class="method-checkout" name="method" value="0" id="input-checkout-offline"> <label for="input-checkout-offline">Thanh toán online</label></div>
                        </div>
                        <div class="btnCheckout">
                            <div id="btn-checkout-online"></div>
                            <button class="btn-checkout-offline">Thanh toán</button>
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
    <!-- <script src="http://localhost/santmdt/public/js/cart.js"></script> -->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script src="http://localhost/santmdt/public/js/checkout.js"></script>
</body>

</html>