<?php
include ("check_permission.php");
include ("./../m_info_company.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_info_company = new M_info_company();

//sanitize data
$title = $sanitize->sanitize_input($_POST['title']);
$description = $sanitize->sanitize_input($_POST['description']);
$address = $sanitize->sanitize_input($_POST['address']);
$phone1 = $sanitize->sanitize_input($_POST['phone1']);
$phone2 = $sanitize->sanitize_input($_POST['phone2']);
$fax = $sanitize->sanitize_input($_POST['fax']);
$email = $sanitize->sanitize_input($_POST['email']);

$update = $m_info_company->update_info_company($title, $description, $address, $phone1, $phone2, $fax, $email);
if($update){
    echo "<script>location.reload();</script>";
}

