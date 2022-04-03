
<div id="header">
    <div id="he1">
        <a href="http://localhost/santmdt" class="link-header-home">
            <img style="width: 100%; height: 100%;" src="http://localhost/santmdt/assets/img/logo1.png" alt="">
        </a>
    </div>
    <div id="he2">
        <div id="he2-1">
            <form action="" id="search">
                <input type="text" placeholder="Tìm sản phẩm mong muốn theo..." list="topics" id="input" name="search">
                <button type="submit" id="submit"><i class="fas fa-search"></i> &ensp; Tìm kếm</button>
            </form>
            <datalist id="topics">
                <option value="Thuốc trừ sâu">
                <option value="Bình phun thuốc">
            </datalist>
        </div>
        <div id="he2-2">
            <ul id="luachon">
                <li><a href="">Phân bón</a></li>
                <li><a href="">Thuốc trừ sâu</a></li>
                <li><a href="">Thuốc diệt cỏ</a></li>
                <li><a href="">Dụng cụ làm vườn</a></li>
                <li><a href="">Khác</a></li>
            </ul>
        </div>
    </div>
    <div id="he4">
        <div id="he4-1">
            <div id="cart">
                <a href="http://localhost/santmdt/giohang" class="link-header"><i class="fas fa-shopping-cart icon-cart icon-header"><span class="count-cart">2</span></i>Giỏ hàng</a>

            </div>
            <div id="wishlist">
                <a href="http://localhost/santmdt/yeuthich" class="link-header"><i class="fas fa-heart icon-cart icon-header"><span class="count-cart">2</span></i>Yêu thích</a>
            </div>
        </div>
        <div id="he4-2">
            <?php 
                require __DIR__.'../../../../modules/model/Accounts.php';
                $account =  new Accounts();
                if($account->isLogin()) {
            ?>
            <div id="a2">
                <a href="" class="link-header"><i class="fas fa-user icon-header"></i> <?php $account->getUsernameBySession(); ?> <i class="fas fa-caret-down"></i></a>
                <ul class="dropdown-header">
                    <li><a href="http://localhost/santmdt/thongtintaikhoan" class="link-header">Thông tin tài khoản</a></li>
                    <li><a href="" class="link-header">Đổi mật khẩu</a></li>
                    <li><a href="http://localhost/santmdt/dangnhap?route=logout" class="link-header">Đăng xuất</a></li>
                </ul>
            </div>
            
            <?php } else {?>
                <div id="a2">
                <i class="fas fa-user icon-header"></i>
                <a href="http://localhost/santmdt/dangnhap" class="link-header d-inline">Đăng nhập</a><b>/</b>
                <a href="http://localhost/santmdt/dangky" class="link-header d-inline">Đăng ký</a>
            </div>

            <?php } ?>
        </div>
    </div>
</div>