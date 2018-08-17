<?php
/* Smarty version 3.1.30, created on 2018-08-17 09:51:47
  from "C:\xampp\htdocs\project_amnote\admin\views\v_efficiencies.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b767e93174568_35654617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7ecc9de7aefe9bce7934ef14d3914ae32d92e33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_efficiencies.tpl',
      1 => 1534492305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b767e93174568_35654617 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEfficiencies">Add Efficiencies </button></div>
                </div>
                <!-- modal add user -->
                <div id="addEfficiencies" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new Efficiencies</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="add_efficienci_form">
                                <div class="modal-body">
                                    <p class="error-msg"></p>
                                    <div class="form-group">
                                        <label>Icon</label>
                                        <input type="text" class="form-control"  name="icon" placeholder="Enter Icon" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control"  name="title" placeholder="Enter Title" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_efficienci">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-efficiencies" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>Icon</th>
                        <th>Title</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['efficiencies']->value, 'efficienci');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['efficienci']->value) {
?>
                        <tr id="delete_efficienci<?php echo $_smarty_tpl->tpl_vars['efficienci']->value->id;?>
">
                            <td style="color: #fa7338"><?php echo $_smarty_tpl->tpl_vars['efficienci']->value->icon;?>
</td>
                            <td><span class="overflow-text"><?php echo $_smarty_tpl->tpl_vars['efficienci']->value->title;?>
</span></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateEfficienci<?php echo $_smarty_tpl->tpl_vars['efficienci']->value->id;?>
">Update</button>
                                <button type="button" class="btn btn-danger" onClick="deleteEfficienci(<?php echo $_smarty_tpl->tpl_vars['efficienci']->value->id;?>
)">Delete</button>
                            </td>
                            <!-- modal update -->
                            <div id="updateEfficienci<?php echo $_smarty_tpl->tpl_vars['efficienci']->value->id;?>
" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Update Efficienci</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form method="post" id="update_efficienci_form<?php echo $_smarty_tpl->tpl_vars['efficienci']->value->id;?>
">
                                            <div class="modal-body">
                                                <p class="error-msg-update<?php echo $_smarty_tpl->tpl_vars['efficienci']->value->id;?>
"></p>
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['efficienci']->value->id;?>
">
                                                <div class="form-group">
                                                    <label>Icon</label>
                                                    <input type="text" class="form-control" name="icon" placeholder="Enter Icon"
                                                           value='<?php echo $_smarty_tpl->tpl_vars['efficienci']->value->icon;?>
' required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Efficienci"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['efficienci']->value->title;?>
" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updateEfficienci(<?php echo $_smarty_tpl->tpl_vars['efficienci']->value->id;?>
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
        // $("#table-efficiencies").DataTable();
        $("#add_efficienci_form").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/add_efficienci",
                method: "POST",
                data: $("#add_efficienci_form").serialize(),
                success: function(data){
                    $(".error-msg").html(data);
                }
            })
        })
    });
    function updateEfficienci(id){
        $("#update_efficienci_form" + id).on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_efficienci",
                method: "POST",
                data: $("#update_efficienci_form" + id).serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function deleteEfficienci(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_efficienci",
            method: "POST",
            data: delete_id,
            success: function(data){
                console.log(data)
                $("#delete_efficienci" + id).hide('slow');
            }
        })
    }
<?php echo '</script'; ?>
><?php }
}
