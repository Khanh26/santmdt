<?php
// ví dụ khi hiển thị view
require_once __DIR__ . '../../../modules/model/Products.php';
$products = new Products();
echo '<pre>';
print_r($products->getAllByID(45));
echo '</pre>';