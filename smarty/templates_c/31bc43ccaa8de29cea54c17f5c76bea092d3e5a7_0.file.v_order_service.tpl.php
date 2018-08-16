<?php
/* Smarty version 3.1.30, created on 2018-08-15 08:13:29
  from "C:\xampp\htdocs\project_amnote\views\v_other_services.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b73c489e3fe68_54334324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31bc43ccaa8de29cea54c17f5c76bea092d3e5a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\views\\v_other_services.tpl',
      1 => 1534313526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b73c489e3fe68_54334324 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="inner-page">
    <div class="container">
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_services']->value, 'order_service');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order_service']->value) {
?>
                                <li><?php echo $_smarty_tpl->tpl_vars['order_service']->value->title;?>
</li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </ul>
                        <div class="order-more text-center">
                            <button type="button" class="btn button-custom">View more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
