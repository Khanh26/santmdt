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
                    <li class="item-breadcrumb"><a href="">Trang chủ</a></li>
                    <li class="item-breadcrumb"><i class="fas fa-angle-double-right"></i></li>
                    <li class="item-breadcrumb">Yêu thích</li>
                </ul>
            </div>
            <hr>

            <div class="main-content">
                <!-- Sidebar -->
                <?php include('../view/layout/client/sidebar-member.php'); ?>
                <!-- End Sidebar -->
                <!-- chung css với cart nên tao để như vậy -->
                <div class="body-member">
                    Day la thong tin tai khoan
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