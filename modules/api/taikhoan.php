<?php

require('../../config/config.php');

//connect
function querySql($sql)
{
    $array = [];
    $result = $GLOBALS['conn']->query($sql);
    while ($row = $result->fetch_assoc()) {
        array_push($array, $row);
    }
    // print_r($category);
    header('Content-type: application/json');
    echo json_encode($array);
    $GLOBALS['conn']->close();
}
function queryEmptyData($sql) {
    $GLOBALS['conn']->query($sql);
}

function getAllAccount() {
    $sql = 'SELECT * FROM `taikhoan`';
    querySql($sql);
}

//  get action
$action = explode("/",$_SERVER['PHP_SELF'])[count(explode("/",$_SERVER['PHP_SELF'])) - 1];
// echo $action;
switch ($action) {
    case 'getAllAccount':
        getAllAccount();
        break;

    default:
        getAllAccount();
        break;
    }
?>