<?php
include ("check_permission.php");
include ("./../m_efficiencies.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_efficiencies = new M_efficiencies();
//sanitize data
$icon = $_POST['icon'];
$title = $sanitize->sanitize_input($_POST['title']);

$add = $m_efficiencies->add_efficienci($icon, $title);
if($add){
    echo "<script>location.reload();</script>";
}


