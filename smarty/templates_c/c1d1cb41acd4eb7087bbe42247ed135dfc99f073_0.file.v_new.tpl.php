<?php
/* Smarty version 3.1.30, created on 2018-08-18 05:41:52
  from "C:\xampp\htdocs\project_amnote\views\v_new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b779580cd3bb3_83654163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1d1cb41acd4eb7087bbe42247ed135dfc99f073' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\views\\v_new.tpl',
      1 => 1534563707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b779580cd3bb3_83654163 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\project_amnote\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<div id="inner-page">
    <div class="container">
        <div class="row">
            <article class="col-lg-12">
                <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="meta-wrapper">
                            <ul class="meta-post">
                                <li><b> Author: </b> <?php echo $_smarty_tpl->tpl_vars['new']->value->full_name;?>
</li>
                                <li><b> Date : </b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['new']->value->time_upload,"%D");?>
</li>
                                <li><b> View: </b> <?php echo $_smarty_tpl->tpl_vars['new']->value->view;?>
</li>
                            </ul>
                        </div>
                        <?php echo $_smarty_tpl->tpl_vars['new']->value->content;?>

                    </div>
                </div>
            </article>
        </div>
    </div>
</div><?php }
}
