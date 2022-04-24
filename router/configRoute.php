<?php
require_once './router/Route.php';
$route = new Route();
// Client
$route->add('dangnhap','client/dangnhap.php');
$route->add('dangxuat','client/dangxuat.php');
$route->add('dangky','client/dangky.php');
$route->add('giohang','client/giohang.php');
$route->add('yeuthich','client/yeuthich.php');
$route->add('sanpham','client/sanpham.php');
$route->add('chitietsp','client/chitietsp.php');
$route->add('tintuc','client/tintuc.php');
$route->add('thongtintaikhoan','client/thongtintaikhoan.php');
$route->add('donhang','client/donhang.php');
$route->add('sodiachi','client/sodiachi.php');
// Admin
$route->add('admin','admin/home.php','trangchu');
$route->add('admin','admin/login.php','dangnhap');