<?php
/* Smarty version 3.1.30, created on 2018-08-04 03:11:15
  from "C:\xampp\htdocs\project_mau\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b64fd33587a36_86753595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb027004f01030ebe0f18ed8110ecaf5cfbdd1a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_mau\\smarty\\templates\\layout.tpl',
      1 => 1533345013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:body.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b64fd33587a36_86753595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
