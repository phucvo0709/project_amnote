<?php
include ("check_permission.php");
include ("./../m_accounting_firm.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_accounting_firm = new M_accounting_firm();
//sanitize data
$content = $sanitize->sanitize_input($_POST['content']);
$add_firm = $m_accounting_firm->add_firm($content);
if($add_firm){
    echo "<script>location.reload();</script>";
}


