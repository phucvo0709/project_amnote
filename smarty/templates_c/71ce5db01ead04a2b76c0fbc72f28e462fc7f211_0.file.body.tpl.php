<?php
/* Smarty version 3.1.30, created on 2018-08-04 03:31:00
  from "C:\xampp\htdocs\project_mau\smarty\templates\body.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b6501d41d50b6_20607164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71ce5db01ead04a2b76c0fbc72f28e462fc7f211' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_mau\\smarty\\templates\\body.tpl',
      1 => 1533346257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:body/contact.tpl' => 1,
  ),
),false)) {
function content_5b6501d41d50b6_20607164 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:body/contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
}
