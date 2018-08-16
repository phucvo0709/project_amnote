<?php
session_start();
if (isset($_SESSION['id']) == false) {
    //If the user is not logged in, redirect the website to the login page
    header('Location: login');
    exit();
}else{
    if(isset($_SESSION['permission']) == 0){
        header('Location: logout');
        exit();
    }
}