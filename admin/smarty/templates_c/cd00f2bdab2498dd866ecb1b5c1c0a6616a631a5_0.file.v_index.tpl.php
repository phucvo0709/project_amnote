<?php
/* Smarty version 3.1.30, created on 2018-08-17 14:51:00
  from "C:\xampp\htdocs\project_amnote\admin\views\v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b76c4b40b9fb5_75623403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd00f2bdab2498dd866ecb1b5c1c0a6616a631a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_index.tpl',
      1 => 1534510258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b76c4b40b9fb5_75623403 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-12">
        <!-- card informations -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">Informations</h4></div>
                </div>


                <table id="table-informations" class="table table-hover dt-responsive nowrap table-centered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Basic Info</th>
                        <th>Phone</th>
                        <th>Location</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'information');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['information']->value) {
?>
                        <tr>
                            <td><b>#<?php echo $_smarty_tpl->tpl_vars['information']->value->id;?>
</b></td>
                            <td>
                                <p class="mb-0 font-weight-bold"><a href="javascript: void(0);"><?php echo $_smarty_tpl->tpl_vars['information']->value->name;?>
</a></p>
                                <span class="font-13 d-none d-sm-block"><?php echo $_smarty_tpl->tpl_vars['information']->value->email;?>
</span>
                            </td>

                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['information']->value->phone;?>

                            </td>

                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['information']->value->city;?>

                            </td>

                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['information']->value->date;?>

                            </td>

                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moreInfo<?php echo $_smarty_tpl->tpl_vars['information']->value->id;?>
">More</button>
                            </td>
                        </tr>
                        <!--  Modal content for the above example -->
                        <div class="modal fade" id="moreInfo<?php echo $_smarty_tpl->tpl_vars['information']->value->id;?>
" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">More info of <?php echo $_smarty_tpl->tpl_vars['information']->value->name;?>
</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h6>Full information</h6>
                                                <address class="line-h-24">
                                                    <b>Name: </b><?php echo $_smarty_tpl->tpl_vars['information']->value->sex;?>
. <?php echo $_smarty_tpl->tpl_vars['information']->value->name;?>
<br>
                                                    <b>Email: </b><?php echo $_smarty_tpl->tpl_vars['information']->value->email;?>
<br>
                                                    <b>Phone: </b><?php echo $_smarty_tpl->tpl_vars['information']->value->phone;?>
<br>
                                                    <b>Company: </b><?php echo $_smarty_tpl->tpl_vars['information']->value->company;?>
<br>
                                                    <b>Address: </b><?php echo $_smarty_tpl->tpl_vars['information']->value->address;?>
, <?php echo $_smarty_tpl->tpl_vars['information']->value->city;?>
<br>
                                                    <b>Date send: </b><?php echo $_smarty_tpl->tpl_vars['information']->value->date;?>
<br>
                                                </address>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
        <!-- card contacts -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">Contacts</h4></div>
                </div>
                <table id="table-contacts" class="table table-hover dt-responsive nowrap table-centered mt-4">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
                        <tr>
                            <td><b>#<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
</b></td>
                            <td>
                                <p class="mb-0 font-weight-bold"><a href="javascript: void(0);"><?php echo $_smarty_tpl->tpl_vars['contact']->value->full_name;?>
</a></p>
                                <span class="font-13 d-none d-sm-block"><?php echo $_smarty_tpl->tpl_vars['contact']->value->email;?>
</span>
                            </td>

                            <td class="overflow-text">
                                <?php echo $_smarty_tpl->tpl_vars['contact']->value->content;?>

                            </td>

                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['contact']->value->date;?>

                            </td>

                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moreContact<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
">More</button>
                            </td>
                        </tr>
                        <!--  Modal content for the above example -->
                        <div class="modal fade" id="moreContact<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">More contact of <?php echo $_smarty_tpl->tpl_vars['contact']->value->full_name;?>
</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h6>Info</h6>
                                                <address class="line-h-24">
                                                    <b>Full Name: </b><?php echo $_smarty_tpl->tpl_vars['contact']->value->full_name;?>
<br>
                                                    <b>Email: </b><?php echo $_smarty_tpl->tpl_vars['contact']->value->email;?>
<br>
                                                </address>
                                            </div> <!-- end col -->
                                            <div class="col-sm-12">
                                                <h6>Contact</h6>
                                                <p><?php echo $_smarty_tpl->tpl_vars['contact']->value->content;?>
</p>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
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
        $("#table-informations").DataTable();
        $("#table-contacts").DataTable();
    });
<?php echo '</script'; ?>
><?php }
}
