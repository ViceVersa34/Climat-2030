<?php

$isAdmin = 0;
if(!empty($_SESSION)) {
    if (array_key_exists('isAdmin', $_SESSION)) {
        if($_SESSION['isAdmin'] == 1) {
            $isAdmin = 1;
        }
    }
}

if($isAdmin == 0) {
    header("Refresh: 0;url=/admin/login.php");
    die();
}