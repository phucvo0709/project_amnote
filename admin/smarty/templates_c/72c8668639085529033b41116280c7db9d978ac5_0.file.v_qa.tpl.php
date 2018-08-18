<?php
/* Smarty version 3.1.30, created on 2018-08-18 07:14:45
  from "C:\xampp\htdocs\project_amnote\admin\views\v_qa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b77ab45884b78_85908068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72c8668639085529033b41116280c7db9d978ac5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_qa.tpl',
      1 => 1534568684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b77ab45884b78_85908068 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once 'C:\\xampp\\htdocs\\project_amnote\\admin\\smarty\\libs\\plugins\\function.counter.php';
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addQa">Add Q&A</button></div>
                </div>
                <!-- modal add user -->
                <div id="addQa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new Q&A</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="add_qa_form">
                                <div class="modal-body">
                                    <p class="error-msg"></p>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control"  name="title" placeholder="Enter Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea class="ckeditor form-control" type="text" id="content" name="content" placeholder="Enter Content"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_qa">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-qa" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Firm</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['qas']->value, 'qa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['qa']->value) {
?>
                        <tr id="delete_qa<?php echo $_smarty_tpl->tpl_vars['qa']->value->id;?>
">
                            <td><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</td>
                            <td><span class="overflow-text"><?php echo $_smarty_tpl->tpl_vars['qa']->value->title;?>
</span></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateQa<?php echo $_smarty_tpl->tpl_vars['qa']->value->id;?>
">Update</button>
                                <button type="button" class="btn btn-danger" onClick="deleteQa(<?php echo $_smarty_tpl->tpl_vars['qa']->value->id;?>
)">Delete</button>
                            </td>
                            <!-- modal update -->
                            <div id="updateQa<?php echo $_smarty_tpl->tpl_vars['qa']->value->id;?>
" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Update Q&A</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form method="post" id="update_qa_form<?php echo $_smarty_tpl->tpl_vars['qa']->value->id;?>
">
                                            <div class="modal-body">
                                                <p class="error-msg-update<?php echo $_smarty_tpl->tpl_vars['qa']->value->id;?>
"></p>
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['qa']->value->id;?>
">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Firm"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['qa']->value->title;?>
" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Content</label>
                                                    <textarea class="ckeditor form-control" type="text" name="content<?php echo $_smarty_tpl->tpl_vars['qa']->value->id;?>
" placeholder="Enter Content"><?php echo $_smarty_tpl->tpl_vars['qa']->value->content;?>
</textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updateQa(<?php echo $_smarty_tpl->tpl_vars['qa']->value->id;?>
)">Save changes</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $("#table-qa").DataTable();
        $("#add_qa_form").on("submit", function(e){
            e.preventDefault();
            for(instance in CKEDITOR.instances){
                CKEDITOR.instances['content'].updateElement();
            }
            $.ajax({
                url: "models/ajax/add_qa",
                method: "POST",
                data: $("#add_qa_form").serialize(),
                success: function(data){
                    $(".error-msg").html(data);
                }
            })
        })
    });
    function updateQa(id){
        $("#update_qa_form" + id).on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_qa",
                method: "POST",
                data: $("#update_qa_form" + id).serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function deleteQa(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_qa",
            method: "POST",
            data: delete_id,
            success: function(data){
                $("#delete_qa" + id).hide('slow');
            }
        })
    }
<?php echo '</script'; ?>
><?php }
}
