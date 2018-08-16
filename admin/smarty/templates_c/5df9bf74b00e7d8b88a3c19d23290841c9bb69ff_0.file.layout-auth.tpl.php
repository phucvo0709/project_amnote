<?php
/* Smarty version 3.1.30, created on 2018-08-15 05:20:13
  from "C:\xampp\htdocs\project_amnote\admin\smarty\templates\layout-auth.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b739bedebe885_68322635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5df9bf74b00e7d8b88a3c19d23290841c9bb69ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\smarty\\templates\\layout-auth.tpl',
      1 => 1534302968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:body-auth.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b739bedebe885_68322635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:body-auth.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
