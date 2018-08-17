<?php

include ("./../m_index.php");
include ("./../../admin/controllers/sanitize.php");
$sanitize = new Sanitize();
$m_index = new M_index();
//sanitize data

$company = $sanitize->sanitize_input($_POST['company']);
$address = $sanitize->sanitize_input($_POST['address']);
$city = $sanitize->sanitize_input($_POST['city']);
$sex = $sanitize->sanitize_input($_POST['sex']);
$name = $sanitize->sanitize_input($_POST['name']);
$email = $sanitize->sanitize_input($_POST['email']);
$phone = $sanitize->sanitize_input($_POST['phone']);

return $m_index->add_info($company, $address, $city, $sex, $name, $email, $phone);



