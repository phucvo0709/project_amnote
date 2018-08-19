<?php
/* Smarty version 3.1.30, created on 2018-08-18 13:38:47
  from "C:\xampp\htdocs\project_amnote\admin\views\v_info_company.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b7805476f6e41_82818445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62456b03d6f43904fb25a90b6cfa3750a8dedeab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_info_company.tpl',
      1 => 1534592322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7805476f6e41_82818445 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></div>
                </div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
                    <form method="post" id="update_info_form">
                        <div class="modal-body">
                            <p class="error-msg-update<?php echo $_smarty_tpl->tpl_vars['info']->value->id;?>
"></p>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter title"
                                       value="<?php echo $_smarty_tpl->tpl_vars['info']->value->title;?>
" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" placeholder="Enter Description" required><?php echo $_smarty_tpl->tpl_vars['info']->value->description;?>
</textarea>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Enter address"
                                       value="<?php echo $_smarty_tpl->tpl_vars['info']->value->address;?>
" required>
                            </div>
                            <div class="form-group">
                                <label>Phone 1</label>
                                <input type="text" class="form-control" name="phone1" placeholder="Enter Phone"
                                       value="<?php echo $_smarty_tpl->tpl_vars['info']->value->phone1;?>
" required>
                            </div>
                            <div class="form-group">
                                <label>Phone 2</label>
                                <input type="text" class="form-control" name="phone2" placeholder="Enter Phone"
                                       value="<?php echo $_smarty_tpl->tpl_vars['info']->value->phone2;?>
" required>
                            </div>
                            <div class="form-group">
                                <label>fax</label>
                                <input type="text" class="form-control" name="fax" placeholder="Enter fax"
                                       value="<?php echo $_smarty_tpl->tpl_vars['info']->value->fax;?>
" required>
                            </div>
                            <div class="form-group">
                                <label>email</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter email"
                                       value="<?php echo $_smarty_tpl->tpl_vars['info']->value->email;?>
" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group mb-3">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" onClick="updateInfo(<?php echo $_smarty_tpl->tpl_vars['info']->value->id;?>
)">Save changes</button>
                            </div>
                        </div>
                    </form>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
<?php echo '<script'; ?>
>
    function updateInfo(id){
        $("#update_info_form").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_info",
                method: "POST",
                data: $("#update_info_form").serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
<?php echo '</script'; ?>
><?php }
}
