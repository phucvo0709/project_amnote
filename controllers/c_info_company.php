<?php
include ('models/m_info_company.php');
$m_info_company = new M_info_company();
$info = $m_info_company->get_info_company();

$smarty->assign('logo', $info->logo);
$smarty->assign('favicon', $info->favicon);
$smarty->assign('title_website', $info->title);
$smarty->assign('description_website', $info->description);
$smarty->assign('address', $info->address);
$smarty->assign('phone1', $info->phone1);
$smarty->assign('phone2', $info->phone2);
$smarty->assign('fax', $info->fax);
$smarty->assign('email', $info->email);