<!-- file này ko ai được dụng tới -->

<?php
include_once './router/configRoute.php';
if (isset($_GET['router'])) {
    $route->view($_GET['router']);
} else {
    include('./view/client/trangchu.php');
}
