<?php
/* Smarty version 3.1.30, created on 2018-08-18 08:48:14
  from "C:\xampp\htdocs\project_amnote\views\v_notice.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b77c12ea64711_17715658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '746d535563cc0dbe90c8017493122d00df2e7a5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\views\\v_notice.tpl',
      1 => 1534574892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b77c12ea64711_17715658 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\project_amnote\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<div id="inner-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-4">
                <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <table id="table-notices" class="table table-hover dt-responsive nowrap table-centered mt-4">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Date upload</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notices']->value, 'notice');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notice']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['notice']->value->id;?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['notice']->value->file;?>
" download><?php echo $_smarty_tpl->tpl_vars['notice']->value->title;?>
</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['notice']->value->full_name;?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['notice']->value->time_upload,"%D");?>
</td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    $(document).ready( function () {
        $('#table-notices').DataTable({
            "order": []
        });
    } );
<?php echo '</script'; ?>
><?php }
}
