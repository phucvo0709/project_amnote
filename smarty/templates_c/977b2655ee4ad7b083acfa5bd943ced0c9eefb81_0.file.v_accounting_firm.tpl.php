<?php
/* Smarty version 3.1.30, created on 2018-08-15 16:12:29
  from "C:\xampp\htdocs\project_amnote\views\v_accounting_firm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b7434cd5c0d81_59070882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '977b2655ee4ad7b083acfa5bd943ced0c9eefb81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\views\\v_accounting_firm.tpl',
      1 => 1534342339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7434cd5c0d81_59070882 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="heading">
    <div class="container">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    </div>
</div>
<section class="section-accounting-firm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-news">
                    <ul class="list-group-striped">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accounting_firms']->value, 'accounting_firm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['accounting_firm']->value) {
?>
                            <li class="list-group-item"><b><?php echo $_smarty_tpl->tpl_vars['accounting_firm']->value->id;?>
 .</b> <?php echo $_smarty_tpl->tpl_vars['accounting_firm']->value->content;?>
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
</section>
<div class="clearfix"></div><?php }
}
