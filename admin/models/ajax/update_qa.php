<?php
include ("check_permission.php");
include ("./../m_qa.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_qa = new M_qa();

//sanitize data
$id = $_POST['id'];
$title = $sanitize->sanitize_input($_POST['title']);
$content = $_POST['content' . $id];

$update = $m_qa->update_qa($title, $content, $id);
if($update){
    echo "<script>location.reload();</script>";
}

