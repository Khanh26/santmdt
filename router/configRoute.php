<?php
require_once './router/Route.php';
$route = new Route();
$route->add('dangnhap','dangnhap.php');
$route->add('dangxuat','dangxuat.php');
$route->add('dangky','dangky.php');
$route->add('giohang','giohang.php');
$route->add('yeuthich','yeuthich.php');
$route->add('sanpham','sanpham.php');
$route->add('chitietsp','chitietsp.php');
$route->add('tintuc','tintuc.php');
$route->add('thongtintaikhoan','thongtintaikhoan.php');
$route->add('donhang','donhang.php');
$route->add('sodiachi','sodiachi.php');