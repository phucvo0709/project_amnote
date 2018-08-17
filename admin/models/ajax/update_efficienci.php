<?php
include ("check_permission.php");
include ("./../m_efficiencies.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_efficiencies = new M_efficiencies();

//sanitize data
$id = $_POST['id'];
$icon = $_POST['icon'];
$title = $sanitize->sanitize_input($_POST['title']);

$update = $m_efficiencies->update_efficienci($icon, $title, $id);
if($update){
    echo "<script>location.reload();</script>";
}

