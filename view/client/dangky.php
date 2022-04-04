<!DOCTYPE html>
<html>

<head>
    <title>Đăng ký</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="http://localhost/santmdt/public/css/dangky.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>

<body>

    <?php
    require_once __DIR__ . '../../../modules/model/Accounts.php';
    require_once __DIR__ . '../../../modules/model/Members.php';
    require_once __DIR__ . '../../../modules/model/Retailers.php';
    $account = new Accounts();
    $member = new Member();
    $retailers = new Retailers();
    if ($account->isLogin()) {
        header('location: ' . $account->baseSite());
    }

    if (isset($_POST['btnSubmit'])) {
        $role = $_POST['role'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $name = $_POST['fullname'];
        $phone = $_POST['phone'];
        $password = md5($_POST['password']);
        if ($role == 'khachhang') {
            if ($account->addAccount($username, $password) && $member->addMember($username, $name, $phone, $email)) {
    ?>
                <script>
                    alert('Tạo tài khoản thành công');
                    window.location = "http://localhost/santmdt/?router=dangnhap";
                </script>

            <?php

            } else {
            ?>
                <script>
                    alert('Tên tài khoản đã tồn tại');
                    window.location = "http://localhost/santmdt/?router=dangky";
                </script>
            <?php

            }
        }

        if ($role == 'nhabanle') {
            if ($account->addAccount($username, $password) && $retailers->addRetailers($username, $name, $phone, $email)) {
            ?>

                <script>
                    alert('Tạo tài khoản thành công');
                    window.location = "http://localhost/santmdt/?router=dangnhap";
                </script>
            <?php

            } else {
            ?>

                <script>
                    alert('Tên tài khoản đã tồn tại');
                    window.location = "http://localhost/santmdt/?router=dangky";
                </script>
    <?php
            }
        }
    }
    ?>

    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Đăng ký tài khoản</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="" method="POST">
                    <select name="role" id="role">
                        <option value="khachhang">Vai trò: Khách hàng</option>
                        <option value="nhabanle">Vai trò: Nhà bán lẻ</option>
                    </select>
                    <input class="text" type="text" id="username" name="username" placeholder="Tên đăng nhập" required>
                    <input class="text inputName" type="text" name="fullname" placeholder="Họ tên" required>
                    <input class="text email" type="email" name="email" placeholder="Email" required>
                    <input class="text inputPhone" type="text" name="phone" placeholder="Số điện thoại" required>
                    <input class="text" type="password" name="password" placeholder="Mật khẩu" required>
                    <input class="text w3lpass" type="password" name="repass" placeholder="Nhập lại mật khẩu" required>
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required>
                            <span>Tôi đồng ý với các điều khoản <a href="#">sau đây</a></span>
                        </label>
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" name="btnSubmit" class="submit" value="ĐĂNG KÝ">
                </form>
                <p>Bạn đã có tài khoản? <a href="http://localhost/santmdt/dangnhap"> Đăng nhập ngay!</a></p>
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">

        </div>
    </div>
    <!-- //main -->
</body>

</html>