<?php
/* Smarty version 3.1.30, created on 2018-08-18 06:19:19
  from "C:\xampp\htdocs\project_amnote\views\v_news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b779e47606d24_25233698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c935ec30d864d68b6983fd2db9fab990e1fdf1d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\views\\v_news.tpl',
      1 => 1534565952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b779e47606d24_25233698 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\project_amnote\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<div id="inner-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'new');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new']->value) {
?>
                        <article class="wow fadeIn animated">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['new']->value->image;?>
" class="img-fluid img-thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['new']->value->title;?>
">
                                </div>
                                <div class="col-lg-9">
                                    <h4 class="title-post"><a class="href-title" href="new.php?id=<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['new']->value->title;?>
</a></h4>

                                    <div class="meta-post mb-2">
                                        <span><b>Date:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['new']->value->time_upload,"%D");?>
</span>
                                        <span><b>View:</b> <?php echo $_smarty_tpl->tpl_vars['new']->value->view;?>
</span>
                                    </div>
                                    <div class="post-desc"><?php echo $_smarty_tpl->tpl_vars['new']->value->description;?>
</div>
                                </div>
                            </div>
                        </article>
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
</div><?php }
}
