<?php
require_once __DIR__ . '../../../modules/model/Products.php';
require_once __DIR__ . '../../../modules/model/TypeProduct.php';
$TypeProduct = new TypeProduct();
$TypeProducts = $TypeProduct->getAll();
$product = new Products();
if (isset($_POST['submit'])) {
    if ($product->add($_POST['nameProduct'],$_SESSION['user']['ID_NBL'],$_POST['typeProduct'], $_POST['priceProduct'], $_POST['priceBProduct'], $_POST['numberProduct'], $_POST['deProduct'], $_FILES)) {
?>
        <script>
            alert('Thêm thành công')
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Thêm thất bại')
        </script>
<?php
    }
}
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
                    <li class="item-breadcrumb"><a href="http://localhost/santmdt/?router=sanpham-cuahang">Sản phẩm cửa hàng</a></li>
                    <li class="item-breadcrumb"><i class="fas fa-angle-double-right"></i></li>
                    <li class="item-breadcrumb">Thêm mới</li>
                </ul>
            </div>
            <hr>

            <div class="main-content">
                <!-- Sidebar -->
                <?php include('./view/client/layout/sidebar-nhabanle.php'); ?>
                <!-- End Sidebar -->
                <!-- chung css với cart nên tao để như vậy -->
                <div class="body-member">
                    <form action="http://localhost/santmdt/?router=sanpham-cuahang-them" enctype="multipart/form-data" id="formAddProduct" method="POST">
                        <div class="d-form">
                            <label for="imgProduct">Ảnh sản phẩm:</label>
                            <input type="file" name="imgProduct" id="imgProduct" accept="image/*" required>
                        </div>
                        <div class="d-form">
                            <label for="nameProduct">Tên sản phẩm:</label>
                            <input type="text" name="nameProduct" id="nameProduct" required>
                        </div>
                        <div class="d-form">
                            <label for="typeProduct">Loại sản phẩm:</label>
                            <select name="typeProduct" id="typeProduct" required>
                            <?php
                            foreach($TypeProducts as $item) {  
                            ?>
                            <option value="<?php echo $item['ID_LOAI']?>"><?php echo $item['TEN_LOAI']?></option>
                            <?php
                            }
                            ?>
                            </select>
                        </div>
                        <div class="d-form">
                            <label for="numberProduct">Số lượng</label>
                            <input type="number" name="numberProduct" id="numberProduct" min="0" required>
                        </div>
                        <div class="d-form">
                            <label for="priceProduct">Giá:</label>
                            <input type="text" name="priceProduct" id="priceProduct" required>
                        </div>
                        <div class="d-form">
                            <label for="priceBProduct">Giá khuyến mãi(nếu có):</label>
                            <input type="text" name="priceBProduct" id="priceBProduct" required>
                        </div>
                        <div class="">
                            <textarea name="deProduct" id="deProduct" cols="30" rows="10" required></textarea>
                        </div>

                        <div>
                            <a href="http://localhost/santmdt/?router=sanpham-cuahang" class="btnSubmitAdd">Huỷ</a>
                            <button type="submit" class="btnSubmitAdd" name="submit">Thêm mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End content -->

    <!-- footer -->
    <?php include('./view/client/layout/footer.php'); ?>
    <!-- End footer -->
    </div>
    <!-- <script src="http://localhost/santmdt/public/js/favorite.js"></script>  -->
    <script src="http://localhost/santmdt/public/js/orders.js"></script>
    <script src="http://localhost/santmdt/public/plugins/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('deProduct');
    </script>

</body>

</html>