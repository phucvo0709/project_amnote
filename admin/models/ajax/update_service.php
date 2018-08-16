<?php
include ("check_permission.php");
include("./../m_other_services.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_other_service = new M_other_service();

//sanitize data
$id = $_POST['id'];
$content = $sanitize->sanitize_input($_POST['content']);

$update = $m_other_service->update_service($content, $id);
if($update){
    echo "<script>location.reload();</script>";
}

