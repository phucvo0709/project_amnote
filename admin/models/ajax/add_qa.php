<?php
include ("check_permission.php");
include ("./../m_qa.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_qa = new M_qa();

//sanitize data
$title = $sanitize->sanitize_input($_POST['title']);
$content = $_POST['content'];

$add = $m_qa->add_qa($title, $content);
if($add){
    echo "<script>location.reload();</script>";
}


