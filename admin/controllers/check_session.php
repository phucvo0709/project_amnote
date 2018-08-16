<?php
session_start();
if (isset($_SESSION['id']) == false) {
    //If the user is not logged in, redirect the website to the login page
    header('Location: login');
    exit();
}else{
    if($_SESSION['permission'] == 0){
        echo
        "<script>
                window.location.href='logout';
                alert('Your account is not authorized to enter the admin panel');
		</script>";
    }
}