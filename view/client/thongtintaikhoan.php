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
                    <li class="item-breadcrumb">Thông tin cá nhân</li>
                </ul>
            </div>
            <hr>

            <div class="main-content">
                <!-- Sidebar -->
                <?php include('./view/client/layout/sidebar-member.php'); ?>
                <!-- End Sidebar -->
                <!-- chung css với cart nên tao để như vậy -->
                <div class="body-member">
                    <div class="header-cart">
                        <h4 class="heading-cart heading-content">thông tin cá nhân</h4>
                    </div>
                    <div class="body-information">
                        <div class="information">
                            <form action="" class="form-information">
                                <div class="block-info">
                                    <div class="item-form-info">
                                        <label for="" class="label-info">Họ và tên:</label>
                                        <input type="text" class="form-control" id="userName" name="userName">
                                    </div>

                                    <div class="item-form-info">
                                        <label for="" class="label-info">Ngày sinh:</label>
                                        <input type="date" class="form-control" id="birthday" name="birthday">
                                    </div>

                                    <div class="item-form-info">
                                        <label for="" class="label-info">Giới tính:</label>
                                        <select class="form-control" name="city" id="city">
                                            <option value="">Nam</option>
                                            <option value="">Nữ</option>
                                            >
                                        </select>
                                    </div>

                                    <div class="item-form-info">
                                        <label for="" class="label-info">Số điện thoại:</label>
                                        <input type="text" class="form-control" id="numberPhone" name="numberPhone">
                                    </div>

                                    <div class="item-form-info">
                                        <label for="" class="label-info">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                
                                <div class="block-info">
                                    <div class="item-form-info">
                                        <label for="" class="label-info">Tỉnh/TP:</label>
                                        <select class="form-control" name="city" id="city">
                                            <option value="">Chọn...</option>
                                            <option value="">Cần Thơ</option>
                                            <option value="">Kiên Giang</option>
                                            <option value="">Cà Mau</option>
                                        </select>
                                    </div>
                                    
                                    <div class="item-form-info">
                                        <label for="" class="label-info">Quận/huyện:</label>
                                        <select class="form-control" name="district" id="district">
                                            <option value="">Chọn...</option>
                                            <option value="">Ninh Kiều</option>
                                            <option value="">Cái Răng</option>
                                        </select>
                                    </div>

                                    <div class="item-form-info">
                                        <label for="" class="label-info">Phường/xã:</label>
                                        <select class="form-control" name="phuong-xa" id="phuong-xa">
                                            <option value="">Chọn...</option>
                                            <option value="">Xuân Khánh</option>
                                            <option value="">Hưng Lơi</option>
                                        </select>
                                    </div>
                                    
                                    <div class="item-form-info">
                                        <label for="" class="label-info">Địa chỉ:</label>
                                        <input type="text" class="form-control" id="sex" name="sex">
                                    </div>

                                </div>

                                <div class="block-btn-form">
                                    <button class="btn-form" id="btn-cancel-form">Nhập lại</button>
                                    <button class="btn-form" id="btn-submit-form">Lưu lại</button>
                                </div>
                            </form>
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
</body>

</html>