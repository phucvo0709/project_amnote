<?php
include ("check_permission.php");
include ("./../m_accounting_firm.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_accounting_firm = new M_accounting_firm();

//sanitize data
$id = $_POST['id'];
$content = $sanitize->sanitize_input($_POST['content']);

$update = $m_accounting_firm->update_firm($content, $id);
if($update){
    echo "<script>location.reload();</script>";
}

