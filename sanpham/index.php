<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/santmdt/assets/css/style.css">
    <title>Trang chủ - Sàn Thương mại số 1 Việt Nam</title>
</head>

<body>
    <div class="wapper">
        <!-- header -->
        <?php include('../view/layout/client/header.php'); ?>
        <!-- End header -->

        <!-- Content -->
        <div class="sidebar_left">
            <div class="sidebar_tittle">
                Ten dang nhap
            </div>
            <ul class="sidebar_menu">
                <li>
                    <a href="#">Tài khoản của tôi</a>
                    <ul class="menu_sub">
                        <li><a href="#">Hồ sơ</a></li>
                        <li><a href="#">Ngân hàng</a></li>
                        <li><a href="#">Đổi mật khẩu</a></li>
                        <li><a href="#">Địa chỉ</a></li>
                    </ul>
                </li>

            </ul>
        </div> 

        <!-- End content -->

        <!-- footer -->
        <?php include('../view/layout/client/footer.php');?>
        <!-- End footer -->
    </div>

</body>
</html>
