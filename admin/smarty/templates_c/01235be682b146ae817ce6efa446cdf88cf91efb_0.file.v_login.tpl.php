<?php
/* Smarty version 3.1.30, created on 2018-08-16 03:19:16
  from "C:\xampp\htdocs\project_amnote\admin\views\v_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b74d114a939b1_02599675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01235be682b146ae817ce6efa446cdf88cf91efb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_login.tpl',
      1 => 1534382342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b74d114a939b1_02599675 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center m-auto">
                            <a href="index">
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
                                        <p class="text-muted mt-2">Enter your email and password to access admin panel.</p>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['alert']->value;?>

                                    <?php }?>
                                <?php }?>
                            </div>
                        </div>

                        <form method="post">

                            <div class="form-group mb-3">
                                <label for="email">Email address</label>
                                <input class="form-control" type="email" id="email" name="email" required
                                       value="<?php if (isset($_POST['btn_login'])) {
echo $_POST['email'];
}?>" placeholder="Enter your email">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" id="password" name="password"
                                       placeholder="Enter your password" required>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit" name="btn_login"> Log In </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        
                        <p class="text-muted">Don't have an account? <a href="register" class="text-dark ml-1"><b>Sign Up</b></a></p>
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
