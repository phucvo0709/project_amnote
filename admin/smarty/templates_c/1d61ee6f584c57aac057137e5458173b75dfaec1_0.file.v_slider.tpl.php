<?php
/* Smarty version 3.1.30, created on 2018-08-18 10:31:46
  from "C:\xampp\htdocs\project_amnote\admin\views\v_slider.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b77d9721e6525_36631884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d61ee6f584c57aac057137e5458173b75dfaec1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_slider.tpl',
      1 => 1534581103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b77d9721e6525_36631884 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSlider">Add Slider</button></div>
                </div>
                <!-- modal add user -->
                <div id="addSlider" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new slider</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="models/ajax/add_slider.php" class="dropzone">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <div class="fallback">
                                            <input type="file" name="file" multiple>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-sliders" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sliders']->value, 'slider');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
?>
                        <tr id="delete_slider<?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
">
                            <td><?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
</td>
                            <td>
                                <img class="img-thumbnail" src="./../<?php echo $_smarty_tpl->tpl_vars['slider']->value->file;?>
" style="max-width: 280px; max-height: 280px"/>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" onClick="deleteSlider(<?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
)">Delete</button>
                            </td>
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
        $("#table-sliders").DataTable({
            "order": []
        });
        $('#addSlider').on('hidden.bs.modal', function () {
            location.reload();
        });
    });
    function deleteSlider(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_slider",
            method: "POST",
            data: delete_id,
            success: function(data){
                $("#delete_slider" + id).hide('slow');
            }
        })
    }
<?php echo '</script'; ?>
><?php }
}
