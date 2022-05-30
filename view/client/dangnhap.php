<?php
require_once __DIR__ . '../../../modules/model/Accounts.php';
$account = new Accounts();
$result = null;

// check login
if ($account->isLogin()) {
    header('location: ' . $account->baseSite());
}

if (isset($_POST['submitLogin'])) {
    $result = $account->login(trim($_POST['username']), md5($_POST['password']), $_POST['role']);
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
    <link href="http://localhost/santmdt/public/css/dangky.css" rel="stylesheet" type="text/css" media="all" />
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
                <?php echo $result != null ? '<h2 class="message">' . $result . '</h2>' : '' ?>
                <form action="" method="post">
                    <select name="role" id="role">
                        <option value="1">Vai trò: Khách hàng</option>
                        <option value="0">Vai trò: Nhà bán lẻ</option>
                    </select>
                    <input class="text inputUsername" type="text" name="username" placeholder="Tên đăng nhập" required>
                    <input class="text" type="password" name="password" placeholder="Mật khẩu" required>
                    <div class="wthree-text">
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" name="submitLogin" value="ĐĂNG NHẬP">
                </form>
                <a class="backHome" href="http://localhost/santmdt">Tiếp tục mua sắm</a>
                <p>Bạn đã có tài khoản? <a href="http://localhost/santmdt/?router=dangky"> Đăng ký</a></p>
            </div>
        </div>
    </div>
    <!-- //main -->
</body>

</html>