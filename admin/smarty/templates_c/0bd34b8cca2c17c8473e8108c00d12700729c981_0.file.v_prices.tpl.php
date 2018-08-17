<?php
/* Smarty version 3.1.30, created on 2018-08-17 08:48:36
  from "C:\xampp\htdocs\project_amnote\admin\views\v_prices.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b766fc419f6c5_58825641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bd34b8cca2c17c8473e8108c00d12700729c981' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_prices.tpl',
      1 => 1534488514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b766fc419f6c5_58825641 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPrice">Add Price</button></div>
                </div>
                <!-- modal add user -->
                <div id="addPrice" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new price</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="add_price_form">
                                <div class="modal-body">
                                    <p class="error-msg"></p>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control"  name="price" placeholder="Enter Price" required>
                                   </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control"  name="description" placeholder="Enter Description" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Special</label>
                                        <select class="custom-select" name="special">
                                            <option value="no">No</option>
                                            <option value="yes">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_price">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-prices" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Special</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prices']->value, 'price');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['price']->value) {
?>
                        <tr id="delete_price<?php echo $_smarty_tpl->tpl_vars['price']->value->id;?>
">
                            <td><?php echo $_smarty_tpl->tpl_vars['price']->value->price;?>
</td>
                            <td><span class="overflow-text"><?php echo $_smarty_tpl->tpl_vars['price']->value->description;?>
</span></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['price']->value->special;?>
</td>
                            <td id="location_td<?php echo $_smarty_tpl->tpl_vars['price']->value->id;?>
">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locations']->value, 'location');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['location']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['price']->value->id == $_smarty_tpl->tpl_vars['location']->value->id_prices) {?>
                                        <p id="location_index<?php echo $_smarty_tpl->tpl_vars['location']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['location']->value->location;?>
</p>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updatePrice<?php echo $_smarty_tpl->tpl_vars['price']->value->id;?>
">Update</button>
                                <button type="button" class="btn btn-danger" onClick="deletePrice(<?php echo $_smarty_tpl->tpl_vars['price']->value->id;?>
)">Delete</button>
                            </td>
                            <!-- modal update -->
                            <div id="updatePrice<?php echo $_smarty_tpl->tpl_vars['price']->value->id;?>
" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Update Price</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form method="post" id="update_price_form<?php echo $_smarty_tpl->tpl_vars['price']->value->id;?>
">
                                            <div class="modal-body">
                                                <p class="error-msg-update<?php echo $_smarty_tpl->tpl_vars['price']->value->id;?>
"></p>
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['price']->value->id;?>
">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="text" class="form-control"  name="price"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['price']->value->price;?>
" placeholder="Enter Price" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control" name="description"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['price']->value->description;?>
" placeholder="Enter Description" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Special</label>
                                                    <select class="custom-select" name="special">
                                                        <option <?php if ($_smarty_tpl->tpl_vars['price']->value->special == 'no') {?> selected="selected" <?php }?> value="no">No</option>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['price']->value->special == 'yes') {?> selected="selected" <?php }?>  value="yes">Yes</option>
                                                    </select>
                                                </div>

                                                <label>Location</label>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input type="text" class="form-control" id="location<?php echo $_smarty_tpl->tpl_vars['price']->value->id;?>
" name="location"
                                                                   placeholder="Enter Location">
                                                        </div>
                                                        <div class="col-6">
                                                            <button type="button" class="btn btn-primary" onclick="addLocation(<?php echo $_smarty_tpl->tpl_vars['price']->value->id;?>
)">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locations']->value, 'location');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['location']->value) {
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['price']->value->id == $_smarty_tpl->tpl_vars['location']->value->id_prices) {?>
                                                        <div class="form-group" id="delete_location<?php echo $_smarty_tpl->tpl_vars['location']->value->id;?>
">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <input type="text" class="form-control" id="location_input<?php echo $_smarty_tpl->tpl_vars['location']->value->id;?>
" name="location"
                                                                          value="<?php echo $_smarty_tpl->tpl_vars['location']->value->location;?>
" placeholder="Enter Location">
                                                                </div>
                                                                <div class="col-6">
                                                                    <button type="button" class="btn btn-warning" onclick="updateLocation(<?php echo $_smarty_tpl->tpl_vars['location']->value->id;?>
)">Update</button>
                                                                    <button type="button" class="btn btn-danger" onclick="deleteLocation(<?php echo $_smarty_tpl->tpl_vars['location']->value->id;?>
)">Delete</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php }?>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                <div class="append-location<?php echo $_smarty_tpl->tpl_vars['price']->value->id;?>
"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updatePrice(<?php echo $_smarty_tpl->tpl_vars['price']->value->id;?>
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
        $("#table-prices").DataTable();
        $("#add_price_form").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/add_price",
                method: "POST",
                data: $("#add_price_form").serialize(),
                success: function(data){
                    $(".error-msg").html(data);
                }
            })
        })
    });
    function addLocation(idPrice){
        let locationData =  $('#location' + idPrice).val();
        $.ajax({
            url: "models/ajax/add_location",
            method: "POST",
            data: {
                id_price: idPrice,
                location: locationData
            },
            success: function(data){
                $(".append-location" + idPrice).after(data);
                $("#location_td" + idPrice).append(locationData);
            }
        })
    }
    function updatePrice(id){
        $("#update_price_form" + id).on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_price",
                method: "POST",
                data: $("#update_price_form" + id).serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function updateLocation(id){
        let locationData =  $('#location_input' + id).val();
        $.ajax({
            url: "models/ajax/update_location",
            method: "POST",
            data: {
                id_location: id,
                location: locationData
            },
            success: function(data){
                $("#location_index" + id).text(data);
            }
        })

    }
    function deletePrice(id){
        let delete_id = "delete_id=" + id;

        $.ajax({
            url: "models/ajax/delete_price",
            method: "POST",
            data: delete_id,
            success: function(data){
                $("#delete_price" + id).hide('slow');
            }
        })
    }
    function deleteLocation(id){
        let delete_id = "delete_id=" + id;

        $.ajax({
            url: "models/ajax/delete_location",
            method: "POST",
            data: delete_id,
            success: function(data){
                $("#delete_location" + id).hide('slow');
                $("#location_index" + id).hide('slow');
            }
        })
    }
<?php echo '</script'; ?>
><?php }
}
