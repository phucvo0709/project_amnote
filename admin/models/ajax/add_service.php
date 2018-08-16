<?php
include ("check_permission.php");
include("./../m_other_services.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_other_service = new M_other_service();
//sanitize data
$content = $sanitize->sanitize_input($_POST['content']);
$add_service = $m_other_service->add_service($content);
if($add_service){
    echo "<script>location.reload();</script>";
}


