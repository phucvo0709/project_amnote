<?php
/* Smarty version 3.1.30, created on 2018-08-15 04:22:02
  from "C:\xampp\htdocs\project_amnote\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b738e4aab4319_29001610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06726f9df481199fb9e95c92951c9d30c80cec2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\smarty\\templates\\layout.tpl',
      1 => 1534299578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:breadcumb.tpl' => 1,
    'file:body.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b738e4aab4319_29001610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['title']->value !== 'Home') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:breadcumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }
}
$_smarty_tpl->_subTemplateRender("file:body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
