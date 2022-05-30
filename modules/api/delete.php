<?php
session_start();
require_once __DIR__ . '../../../modules/model/Cart.php';
$cart = new Cart();
if($cart->deleteCart($_SESSION['user']['ID_KH'])) {
    $cart->responseJson(['message' => 'success']);
} else {
    $cart->responseJson(['message' => 'error']);
}
