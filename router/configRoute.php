<?php
require_once './router/Route.php';
$route = new Route();
$route->add('dangnhap','dangnhap.php','view');
$route->add('dangxuat','dangxuat.php','view');
$route->add('dangky','dangky.php','view');
$route->add('giohang','giohang.php','view');
$route->add('yeuthich','yeuthich.php','view');
$route->add('sanpham','sanpham.php','view');
$route->add('chitietsp','chitietsp.php','view');
$route->add('tintuc','tintuc.php','view');
$route->add('thongtintaikhoan','thongtintaikhoan.php','view');
$route->add('donhang','donhang.php','view');