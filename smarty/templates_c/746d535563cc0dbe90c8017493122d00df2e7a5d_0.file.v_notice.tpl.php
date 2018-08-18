<?php
/* Smarty version 3.1.30, created on 2018-08-18 06:42:03
  from "C:\xampp\htdocs\project_amnote\views\v_notice.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b77a39b5bde96_48614196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '746d535563cc0dbe90c8017493122d00df2e7a5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\views\\v_notice.tpl',
      1 => 1534567296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b77a39b5bde96_48614196 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <th>Date</th>
                        <th>View</th>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['notice']->value->title;?>
</td>
                            <td>Koojinyoung</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['notice']->value->time_upload;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['notice']->value->view;?>
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
        $('#table-notices').DataTable();
    } );
<?php echo '</script'; ?>
><?php }
}
