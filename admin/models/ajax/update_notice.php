<?php
include ("check_permission.php");
include ("./../m_notice.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_notice = new M_notice();

//sanitize data
$id = $_POST['id'];
$title = $sanitize->sanitize_input($_POST['title']);

$update = $m_notice->update_notice($title, $id);
if($update){
    echo "<script>location.reload();</script>";
}

