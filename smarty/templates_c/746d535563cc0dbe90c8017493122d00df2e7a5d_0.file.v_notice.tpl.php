<?php
/* Smarty version 3.1.30, created on 2018-08-15 08:42:07
  from "C:\xampp\htdocs\project_amnote\views\v_notice.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b73cb3f47e1b7_32598998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '746d535563cc0dbe90c8017493122d00df2e7a5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\views\\v_notice.tpl',
      1 => 1534315298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b73cb3f47e1b7_32598998 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="inner-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <table class="table table-bordered">
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
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div><?php }
}
