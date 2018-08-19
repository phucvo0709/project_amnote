<?php
/* Smarty version 3.1.30, created on 2018-08-19 02:23:48
  from "C:\xampp\htdocs\project_amnote\admin\views\v_favicon_company.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b78b89403c403_77742403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e52fc5168cea567c4328c05943d552cac873f4c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_favicon_company.tpl',
      1 => 1534637961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b78b89403c403_77742403 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <label for="hinh" style="margin-bottom: 10px">Favicon Company:</label>
                        <p class="error-msg-update"></p>
                        <div class="row">
                            <div class="col col-4">
                                <div class="input-file-container">
                                    <input class="input-file" type="file" name="image" id="file"/>
                                    <label tabindex="0" for="my-file" class="input-file-trigger">Upload Favicon</label>
                                </div>
                                <p class="file-return"></p>
                            </div>
                            <div class="col col-3">
                                <img id="hienThi" class="img-fluid" src="./../<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
"/>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn_update" onClick="updateFavicon()">Update Favicon</button>
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
    function updateFavicon(){
        $("#update_info_form").on("submit", function(e){
            e.preventDefault();
            let dataForm = new FormData(this);
            $.ajax({
                url: "models/ajax/update_favicon",
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
