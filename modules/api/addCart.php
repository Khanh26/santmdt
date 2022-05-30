<?php
require_once __DIR__ . '../../../modules/model/Cart.php';
$cart = new Cart();
if($cart->add($_POST['idkh'],$_POST['idsp'],$_POST['sl'])) {
    $cart->responseJson(['message' => 'success']);
} else {
    $cart->responseJson(['message' => 'error']);
}