<?php
session_start();
if(isset($_SESSION['permission'])) {
    if (!$_SESSION['permission'] > 0) {
        header('Location: logout');
        exit();
    }
}else{
    header('Location: logout');
    exit();
}