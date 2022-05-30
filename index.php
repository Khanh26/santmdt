<?php
session_start();
include './router/configRoute.php';
if (isset($_GET['router'])) {
    if($_GET['router'] == 'admin') {
        if(isset($_GET['page'])) {
            $route->view($_GET['router'],$_GET['page']);
        } else {
            $route->view($_GET['router'],'trangchu');
        }
    }
    else {
        $route->view($_GET['router']);
    }
} else {
    include('./view/client/trangchu.php');
}
