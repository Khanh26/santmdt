<?php
// Lấy địa chỉ hiện dang truy cập
    $currentRoute = explode('/',$_SERVER['REQUEST_URI'])[2];
?>

<div class="sidebar-member">
    <div class="header-sidebar">
        <div class="block-avatar">
            <img src="http://localhost/santmdt/public/img/avatar-mac-dinh.png" alt="" class="avatar-member">
        </div>
        <div class="body-header-sidebar">
            <p class="quote-sidebar">Tài khoản của</p>
            <h4 class="heading-username">Đoàn Trọng Khanh</h4>
        </div>
    </div>

    <div class="body-sidebar">
        <ul class="nav-sidebar">
            <li class="item-sidebar">
                <a href="http://localhost/santmdt/?router=thongtintaikhoan" class="item-link-sidebar <?php echo $_GET['router'] == 'thongtintaikhoan' ? 'active' : '' ?>">
                <i class="fas fa-user icon-sidebar"></i>Thông tin tài khoản</a>
            </li>
            <li class="item-sidebar">
                <a href="http://localhost/santmdt/?router=donhang" class="item-link-sidebar <?php echo $_GET['router'] == 'donhang' ? 'active' : '' ?>"><i class="fas fa-box icon-sidebar"></i>Đơn hàng của tôi</a>
            </li>
            <li class="item-sidebar">
                <a href="http://localhost/santmdt/?router=yeuthich" class="item-link-sidebar <?php echo $_GET['router'] == 'yeuthich' ? 'active' : '' ?>">
                <i class="fas fa-heart icon-sidebar"></i>Sản phẩm yêu thích</a>
            </li>
        </ul>
    </div>
</div>