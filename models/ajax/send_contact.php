<?php

include ("./../m_index.php");
include ("./../../admin/controllers/sanitize.php");
$sanitize = new Sanitize();
$m_index = new M_index();
//sanitize data

$full_name = $sanitize->sanitize_input($_POST['full_name']);
$email = $sanitize->sanitize_input($_POST['email']);
$content = $sanitize->sanitize_input($_POST['content']);

return $m_index->add_contact($full_name, $email, $content);



