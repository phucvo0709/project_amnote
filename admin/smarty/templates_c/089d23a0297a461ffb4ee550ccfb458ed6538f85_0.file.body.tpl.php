<?php
/* Smarty version 3.1.30, created on 2018-08-16 03:50:39
  from "C:\xampp\htdocs\project_amnote\admin\smarty\templates\body.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b74d86fea8db1_08842823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '089d23a0297a461ffb4ee550ccfb458ed6538f85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\smarty\\templates\\body.tpl',
      1 => 1534302935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:left-sidebar.tpl' => 1,
    'file:topbar.tpl' => 1,
    'file:breadcumb.tpl' => 1,
  ),
),false)) {
function content_5b74d86fea8db1_08842823 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
<!-- Begin page -->
<div id="wrapper">
    <?php $_smarty_tpl->_subTemplateRender("file:left-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="content-page">
        <div class="content">
            <?php $_smarty_tpl->_subTemplateRender("file:topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- Start Content-->
            <div class="container-fluid">
                <?php $_smarty_tpl->_subTemplateRender("file:breadcumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                <?php }?>
            </div>
        </div> <!-- content -->
    </div>
</div>
<!-- END wrapper --><?php }
}
