<?php
/* Smarty version 3.1.30, created on 2018-08-18 14:07:27
  from "C:\xampp\htdocs\project_amnote\admin\views\v_logo_company.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b780bff759589_30385998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd65308f5f2b376f2550a0241208da4895955b93c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_logo_company.tpl',
      1 => 1534594045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b780bff759589_30385998 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></div>
                </div>
                <form method="POST" id="update_info_form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="hinh" style="margin-bottom: 10px">Logo Company:</label>
                        <p class="error-msg-update"></p>
                        <div class="row">
                            <div class="col col-4">
                                <div class="input-file-container">
                                    <input class="input-file" type="file" name="image" id="file"/>
                                    <label tabindex="0" for="my-file" class="input-file-trigger">Upload Logo</label>
                                </div>
                                <p class="file-return"></p>
                            </div>
                            <div class="col col-3">
                                <img id="hienThi" class="img-fluid" src="./../<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
"/>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn_update" onClick="updateLogo()">Update Logo</button>
                </form>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
<?php echo '<script'; ?>
 src="public/js/input_file.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh_add.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function updateLogo(){
        $("#update_info_form").on("submit", function(e){
            e.preventDefault();
            let dataForm = new FormData(this);
            $.ajax({
                url: "models/ajax/update_logo",
                type: "POST",
                data: dataForm,
                mimeTypes:"multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                success: function(data){
                    $(".error-msg-update").html(data);
                }
            })
        })
    }
<?php echo '</script'; ?>
><?php }
}
