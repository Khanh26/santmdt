



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
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Đăng ký tài khoản</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="" method="POST">
                    <select name="role" id="role">
                        <option value="">Bạn đăng ký để trở thành...</option>
                        <option value="">Khách hàng</option>
                        <option value="">Nhà bán lẻ</option>
                    </select>
                    <input class="text" type="text" id="username" name="username" placeholder="Tên đăng nhập" required>
                    <input class="text inputName" type="text" name="fullname" placeholder="Họ tên" required>
                    <input class="text email" type="email" name="email" placeholder="Email" required>
                    <input class="text inputPhone" type="text" name="phone" placeholder="Số điện thoại" required>
                    <input class="text" type="password" name="pass" placeholder="Mật khẩu" required>
                    <input class="text w3lpass" type="password" name="repass" placeholder="Nhập lại mật khẩu" required>
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required>
                            <span>Tôi đồng ý với các điều khoản <a href="#">sau đây</a></span>
                        </label>
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" name="btnSubmit" value="ĐĂNG KÝ">
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