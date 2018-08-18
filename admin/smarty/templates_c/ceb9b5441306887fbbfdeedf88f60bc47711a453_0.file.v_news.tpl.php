<?php
/* Smarty version 3.1.30, created on 2018-08-18 06:11:11
  from "C:\xampp\htdocs\project_amnote\admin\views\v_news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b779c5f2233d7_99810864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceb9b5441306887fbbfdeedf88f60bc47711a453' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_news.tpl',
      1 => 1534565466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b779c5f2233d7_99810864 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNew">Add News</button></div>
                </div>
                <!-- modal add user -->
                <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new news</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="uploadForm" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control"  name="title" placeholder="Enter Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Desctiption</label>
                                        <input type="text" class="form-control"  name="description" placeholder="Enter Description" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea class="ckeditor form-control" type="text" name="content" placeholder="Enter Content"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-3 mr-2">
                                                <label>Thumbnail</label>
                                                <p class="error-msg"></p>
                                                <div class="input-file-container">
                                                    <input class="input-file" id="file" name="image" type="file" required>
                                                    <label tabindex="0" for="my-file" class="input-file-trigger">Upload Image</label>
                                                </div>
                                                <p class="file-return"></p>
                                            </div>
                                            <div class="col-3">
                                                <img id="hienThi" class="img-thumbnail" src="http://fakeimg.pl/280x280" style="display: none; max-width: 280px; max-height:280px"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_new">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-news" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'new');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new']->value) {
?>
                        <tr id="delete_new<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
">
                            <td><?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
</td>
                            <td><span class="overflow-text"><?php echo $_smarty_tpl->tpl_vars['new']->value->title;?>
</span></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['new']->value->time_upload;?>
</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateNew<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
" onClick="getId(<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
)">Update</button>
                                <button type="button" class="btn btn-danger" onClick="deleteNew(<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
)">Delete</button>
                            </td>
                            <!-- modal update -->
                            <div id="updateNew<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Update New</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form method="post" id="uploadForm<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control"  name="title"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['new']->value->title;?>
" placeholder="Enter Title" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control"  name="description"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['new']->value->description;?>
" placeholder="Enter Description" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Content</label>
                                                    <textarea class="ckeditor form-control" type="text" name="content<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
"
                                                              placeholder="Enter Content"><?php echo $_smarty_tpl->tpl_vars['new']->value->content;?>
</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col col-3 mr-2">
                                                            <label>Thumbnail</label>
                                                            <p class="error-msg-update<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
"></p>
                                                            <div class="input-file-container">
                                                                <input class="input-file" type="file" name="image" id="file<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
"/>
                                                                <label tabindex="0" for="my-file" class="input-file-trigger">New image</label>
                                                            </div>
                                                            <p class="file-return"></p>
                                                        </div>
                                                        <div class="col col-3">
                                                            <img id="hienThi<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
" class="img-thumbnail" src="./../<?php echo $_smarty_tpl->tpl_vars['new']->value->image;?>
" style="max-width: 280px; max-height: 280px"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updateNew(<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
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
    $(document).ready(function(){
        var editorRulesObject = {
            elements: {
                img: function( el ) {
                    if(el.attributes.style) {
                        el.attributes.style = 'width: 100%';
                    }
                }
            }
        };

        CKEDITOR.on('instanceReady', function( e ) {
            // Ensures that any non-styled text, or text input without any tags will be correctly styled.
            CKEDITOR.instances[e.editor.name].dataProcessor.dataFilter.addRules( editorRulesObject );
            CKEDITOR.instances[e.editor.name].dataProcessor.htmlFilter.addRules( editorRulesObject );
        });
        $("#table-news").DataTable();
        $("#uploadForm").on("submit", function(e){
            e.preventDefault();
            let dataForm = new FormData(this);
            dataForm.append('content', CKEDITOR.instances['content'].getData());
            $.ajax({
                url: "models/ajax/add_new",
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
    function updateNew(id){
        $("#uploadForm" + id).on("submit", function(e){
            e.preventDefault();
            let dataForm = new FormData(this);
            dataForm.append('content', CKEDITOR.instances['content' + id].getData());
            $.ajax({
                url: "models/ajax/update_new",
                type: "POST",
                data: dataForm,
                mimeTypes:"multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function deleteNew(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_new",
            method: "POST",
            data: delete_id,
            success: function(data){
                console.log(data)
                $("#delete_new" + id).hide('slow');
            }
        })
    }
<?php echo '</script'; ?>
><?php }
}
