<?php
/* Smarty version 3.1.30, created on 2018-08-18 08:46:44
  from "C:\xampp\htdocs\project_amnote\admin\views\v_notice.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b77c0d4b39e13_63845728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ef9b77307bd2c1eede11adec3f7855a5167cccd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_notice.tpl',
      1 => 1534574800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b77c0d4b39e13_63845728 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNotice">Add Notice</button></div>
                </div>
                <!-- modal add user -->
                <div id="addNotice" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new notice</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="add_notice_form" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <p class="error-msg"></p>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control"  name="title" placeholder="Enter Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" class="form-control"  name="file" placeholder="Upload new file" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_notice">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-notices" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Upload By</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notices']->value, 'notice');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notice']->value) {
?>
                        <tr id="delete_notice<?php echo $_smarty_tpl->tpl_vars['notice']->value->id;?>
">
                            <td><?php echo $_smarty_tpl->tpl_vars['notice']->value->id;?>
</td>
                            <td><a href="./../<?php echo $_smarty_tpl->tpl_vars['notice']->value->file;?>
" download><?php echo $_smarty_tpl->tpl_vars['notice']->value->title;?>
</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['notice']->value->full_name;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['notice']->value->time_upload;?>
</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateNotice<?php echo $_smarty_tpl->tpl_vars['notice']->value->id;?>
">Update</button>
                                <button type="button" class="btn btn-danger" onClick="deleteNotice(<?php echo $_smarty_tpl->tpl_vars['notice']->value->id;?>
)">Delete</button>
                            </td>
                            <!-- modal update -->
                            <div id="updateNotice<?php echo $_smarty_tpl->tpl_vars['notice']->value->id;?>
" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Update Notice</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form method="post" id="update_notice_form<?php echo $_smarty_tpl->tpl_vars['notice']->value->id;?>
">
                                            <div class="modal-body">
                                                <p class="error-msg-update<?php echo $_smarty_tpl->tpl_vars['notice']->value->id;?>
"></p>
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['notice']->value->id;?>
">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Firm"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['notice']->value->title;?>
" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updateNotice(<?php echo $_smarty_tpl->tpl_vars['notice']->value->id;?>
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
        $("#table-notices").DataTable({
            "order": []
        });
        $("#add_notice_form").on("submit", function(e){
            e.preventDefault();
            let dataForm = new FormData(this);
            $.ajax({
                url: "models/ajax/add_notice",
                type: "POST",
                data: dataForm,
                mimeTypes:"multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                success: function(data){
                    $(".error-msg").html(data);
                }
            })
        })
    });
    function updateNotice(id){
        $("#update_notice_form" + id).on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_notice",
                method: "POST",
                data: $("#update_notice_form" + id).serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function deleteNotice(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_notice",
            method: "POST",
            data: delete_id,
            success: function(data){
                $("#delete_notice" + id).hide('slow');
            }
        })
    }
<?php echo '</script'; ?>
><?php }
}
