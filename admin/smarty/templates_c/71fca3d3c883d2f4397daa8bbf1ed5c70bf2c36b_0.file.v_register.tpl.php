<?php
/* Smarty version 3.1.30, created on 2018-08-16 02:49:57
  from "C:\xampp\htdocs\project_amnote\admin\views\v_register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b74ca35c94631_30885798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71fca3d3c883d2f4397daa8bbf1ed5c70bf2c36b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_register.tpl',
      1 => 1534380594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b74ca35c94631_30885798 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center m-auto">
                            <a href="index.html">
                                <span><img src="public/assets/images/logo.png" alt="" height="22"></span>
                            </a>
                            <div class="mt-2 mb-2">
                            <?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
                                    <p class="text-danger mt-2"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            <?php } else { ?>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value;
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == null) {?>
                                    <p class="text-muted mt-2">Don't have an account? Create free account</p>
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['alert']->value;?>

                                <?php }?>
                            <?php }?>
                            </div>
                        </div>

                        <form method="post">
                            <div class="form-group mb-3">
                                <label for="full_name">Full Name</label>
                                <input class="form-control" type="text" id="full_name" name="full_name"
                                       value="<?php if (isset($_POST['btn_register'])) {
echo $_POST['full_name'];
}?>" placeholder="Enter your name" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email address</label>
                                <input class="form-control" type="email" id="email" name="email" required
                                       value="<?php if (isset($_POST['btn_register'])) {
echo $_POST['email'];
}?>" placeholder="Enter your email">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" id="password" name="password"
                                       placeholder="Enter your password" required>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit" name="btn_register"> Sign Up </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Already have account? <a href="login" class="text-dark ml-1"><b>Log In</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page --><?php }
}
