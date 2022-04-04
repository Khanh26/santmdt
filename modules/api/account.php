<?php
require_once __DIR__ . '../../../modules/model/Accounts.php';
$account = new Accounts();

$action = explode("/",$_SERVER['PHP_SELF'])[count(explode("/",$_SERVER['PHP_SELF'])) - 1];
// echo $action;
switch ($action) {
    case 'checkUsername':
        if(isset($_GET['username'])) {
            $account->isUsernameExist($_GET['username']);
        }
        break;
    }
