<?php
/* Smarty version 3.1.30, created on 2018-08-15 07:11:22
  from "C:\xampp\htdocs\project_amnote\smarty\templates\breadcumb.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b73b5fa2a6924_25298856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '283aeb945383554a25febbb05bdac770f5bdb0c5' => 
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
function content_5b73b5fa2a6924_25298856 (Smarty_Internal_Template $_smarty_tpl) {
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
