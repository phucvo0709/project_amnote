<?php
/* Smarty version 3.1.30, created on 2018-08-17 13:27:59
  from "C:\xampp\htdocs\project_amnote\views\v_other_service.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b76b13f476781_05873561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce7cb267eef6c8693be7a1ec93270552355dcbfb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\views\\v_other_service.tpl',
      1 => 1534505278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b76b13f476781_05873561 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="inner-page">
    <div class="container mb-4">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <div class="row">
                    <div class="col-lg-4">
                        <img width="250" height="206" src="http://amnote.com/wp-content/uploads/2017/03/imac-amnote-300x248-250x206.png" class="img-fluid" alt="imac-amnote-300x248-250x206">
                        <img width="250" height="291" src="http://amnote.com/wp-content/uploads/2017/03/468992809-250x291.png" class="img-fluid" alt="468992809-250x291">
                    </div>
                    <div class="col-lg-8">
                        <p><strong class="service1">AMnote Vietnam is professional in service of accounting and administration as follow:</strong></p>
                        <ul class="service02">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['other_services']->value, 'other_service');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['other_service']->value) {
?>
                                <li><?php echo $_smarty_tpl->tpl_vars['other_service']->value->content;?>
</li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
