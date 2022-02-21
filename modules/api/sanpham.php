<?php
    require('../../config/config.php');
    // $id_sp =$_POST('ID_SP');
    $sql = 'SELECT * FROM `san_pham`';
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
    function getProduct(){
        $sql = 'SELECT * FROM `san_pham`';   
        querySql($sql);   
    }
    function deleteProduct(){
        $sql = 'DELETE FROM `san_pham` WHERE 0';
        querySql($sql);   
    }
    $action = explode("/",$_SERVER['PHP_SELF'])[count(explode("/",$_SERVER['PHP_SELF'])) - 1];
    switch ($action) {
        case 'getProduct':
            getProduct();
            break;
        case 'deleteProduct':
            break;
        default:
            getProduct();
            break;
        }
    
    
    // function get() {
    //     $sql = 'SELECT * FROM `sanpham`';
    //     querySql($sql);
    // }
    

    
?>