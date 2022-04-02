<?php
require_once __DIR__ . '../../modules/model/Accounts.php';
$account = new Accounts();

// logout
if (isset($_GET['route']) && $_GET['route'] == 'logout') {
    $account->logout();
} else {
    // check login
    if ($account->isLogin()) {
        header('location: '.$account->baseSite());
    }

    if (isset($_POST['submitLogin'])) {
        $account->login($_POST['username'], $_POST['password']);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập</title>
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
    <link href="http://localhost/santmdt/assets/css/dangky.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Đăng nhập</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="" method="post">
                    <input class="text inputUsername" type="text" name="username" placeholder="Tên đăng nhập" required>
                    <input class="text" type="password" name="password" placeholder="Mật khẩu" required>
                    <div class="wthree-text">
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" name="submitLogin" value="ĐĂNG NHẬP">
                </form>
                <a class="backHome" href="http://localhost/santmdt">Tiếp tục mua sắm</a>
                <p>Bạn đã có tài khoản? <a href="http://localhost/santmdt/dangky"> Đăng ký</a></p>
            </div>
        </div>
    </div>
    <!-- //main -->
</body>

</html>