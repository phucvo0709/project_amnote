<?php
/* Smarty version 3.1.30, created on 2018-08-16 14:17:23
  from "C:\xampp\htdocs\project_amnote\admin\views\v_other_services.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b756b53226557_96263391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64934f44c967a0ffadba1e12bb8a3b937f5947f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_other_services.tpl',
      1 => 1534421807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b756b53226557_96263391 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once 'C:\\xampp\\htdocs\\project_amnote\\admin\\smarty\\libs\\plugins\\function.counter.php';
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addService">Add Other Service</button></div>
                </div>
                <!-- modal add user -->
                <div id="addService" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new other service</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="add_firm_form">
                                <div class="modal-body">
                                    <p class="error-msg"></p>
                                    <div class="form-group">
                                        <label>Service</label>
                                        <input type="text" class="form-control"  name="content" placeholder="Enter Service" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_service">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-services" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Service</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
?>
                        <tr id="delete_service<?php echo $_smarty_tpl->tpl_vars['service']->value->id;?>
">
                            <td><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</td>
                            <td><span class="overflow-text"><?php echo $_smarty_tpl->tpl_vars['service']->value->content;?>
</span></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateService<?php echo $_smarty_tpl->tpl_vars['service']->value->id;?>
">Update</button>
                                <button type="button" class="btn btn-danger" onClick="deleteService(<?php echo $_smarty_tpl->tpl_vars['service']->value->id;?>
)">Delete</button>
                            </td>
                            <!-- modal update -->
                            <div id="updateService<?php echo $_smarty_tpl->tpl_vars['service']->value->id;?>
" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Update Service</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form method="post" id="update_service_form<?php echo $_smarty_tpl->tpl_vars['service']->value->id;?>
">
                                            <div class="modal-body">
                                                <p class="error-msg-update<?php echo $_smarty_tpl->tpl_vars['service']->value->id;?>
"></p>
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['service']->value->id;?>
">
                                                <div class="form-group">
                                                    <label>Service</label>
                                                    <input type="text" class="form-control" name="content" placeholder="Enter Service"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['service']->value->content;?>
" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updateService(<?php echo $_smarty_tpl->tpl_vars['service']->value->id;?>
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
        $("#table-services").DataTable();
        $("#add_service_form").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/add_service",
                method: "POST",
                data: $("#add_service_form").serialize(),
                success: function(data){
                    $(".error-msg").html(data);
                }
            })
        })
    });
    function updateService(id){
        $("#update_service_form" + id).on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_service",
                method: "POST",
                data: $("#update_service_form" + id).serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function deleteService(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_service",
            method: "POST",
            data: delete_id,
            success: function(data){
                console.log(data)
                $("#delete_service" + id).hide('slow');
            }
        })
    }
<?php echo '</script'; ?>
><?php }
}
