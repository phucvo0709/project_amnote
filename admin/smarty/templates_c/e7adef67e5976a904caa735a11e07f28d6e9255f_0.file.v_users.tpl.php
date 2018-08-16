<?php
/* Smarty version 3.1.30, created on 2018-08-16 12:48:53
  from "C:\xampp\htdocs\project_amnote\admin\views\v_users.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b7556953d5a54_13772419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7adef67e5976a904caa735a11e07f28d6e9255f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_users.tpl',
      1 => 1534416532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7556953d5a54_13772419 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">Add User</button></div>
                </div>
                <!-- modal add user -->
                <div id="addUser" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new user</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="add_user_form">
                                <div class="modal-body">
                                    <p class="error-msg"></p>
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control"  name="full_name" placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Permission</label>
                                        <select class="custom-select" name="permission">
                                            <option value="0">Member</option>
                                            <option value="1">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_user">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-users" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                    <tr id="delete_user<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->full_name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->permission == 1) {?>Admin
                                <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->permission == 0) {?>Member
                            <?php }?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateUser<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">Update</button>
                            <?php if (isset($_SESSION['id'])) {?>
                                <?php if ($_SESSION['id'] !== $_smarty_tpl->tpl_vars['user']->value->id) {?>
                                    <button type="button" class="btn btn-danger" onClick="deleteUser(<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
)">Delete</button>
                                <?php }?>
                            <?php }?>
                        </td>
                        <!-- modal update -->
                        <div id="updateUser<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">User <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                        <form method="post" id="update_user_form<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
                                            <div class="modal-body">
                                                <p class="error-msg-update<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"></p>
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
                                                <div class="form-group">
                                                    <label >Full Name</label>
                                                    <input type="text" class="form-control" name="full_name" placeholder="Enter Name"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['user']->value->full_name;?>
" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email address</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Enter email"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>New password</label>
                                                    <input type="password" name="password" class="form-control" placeholder="New Password">
                                                </div>
                                                <div class="form-group">
                                                    <label>Permission</label>
                                                    <select class="custom-select" name="permission">
                                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->permission == 1) {?> selected="selected" <?php }?> value="1">Admin</option>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->permission == 0) {?> selected="selected" <?php }?>  value="0">Member</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updateUser(<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
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
        $('#table-users').DataTable( {
            "order": [[ 3, "desc" ]]
        } );
        $("#add_user_form").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/add_user",
                method: "POST",
                data: $("#add_user_form").serialize(),
                success: function(data){
                    $(".error-msg").html(data);
                }
            })
        })
    });
    function updateUser(id){
        $("#update_user_form" + id).on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_user",
                method: "POST",
                data: $("#update_user_form" + id).serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function deleteUser(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_user",
            method: "POST",
            data: delete_id,
            success: function(data){
                console.log(data)
                $("#delete_user" + id).hide('slow');
            }
        })
    }
<?php echo '</script'; ?>
><?php }
}
