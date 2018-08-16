<?php
/* Smarty version 3.1.30, created on 2018-08-15 04:22:02
  from "C:\xampp\htdocs\project_amnote\smarty\templates\breadcumb.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b738e4ab19995_43332455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c32e2e4f3dc2551d1225f0ab4fdec064034f95ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\smarty\\templates\\breadcumb.tpl',
      1 => 1534299426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b738e4ab19995_43332455 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="http://amnote.com/?lang=en"><i class="pe-7s-home"></i></a>
                    </li>
                    <li><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
                </ul>
            </div>
        </div>
    </div>
</div><?php }
}
