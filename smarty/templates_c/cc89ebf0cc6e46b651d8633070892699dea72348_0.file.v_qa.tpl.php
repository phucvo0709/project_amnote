<?php
/* Smarty version 3.1.30, created on 2018-08-17 13:21:39
  from "C:\xampp\htdocs\project_amnote\views\v_qa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b76afc364d408_29944639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc89ebf0cc6e46b651d8633070892699dea72348' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\views\\v_qa.tpl',
      1 => 1534504896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b76afc364d408_29944639 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once 'C:\\xampp\\htdocs\\project_amnote\\smarty\\libs\\plugins\\function.counter.php';
?>
<div id="inner-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['qas']->value, 'qa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['qa']->value) {
?>
                    <div class="col-lg-12">
                        <div class="content-qa">
                            <p>
                                <i><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</i> <?php echo $_smarty_tpl->tpl_vars['qa']->value->title;?>

                            </p>
                            <?php echo $_smarty_tpl->tpl_vars['qa']->value->content;?>

                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>

    $(document).ready(function(){
        $('.content-qa ul li').prepend('<li class="pe-7s-angle-down"></li>') ;
    })
<?php echo '</script'; ?>
><?php }
}
