<?php
/* Smarty version 3.1.30, created on 2018-08-16 02:20:50
  from "C:\xampp\htdocs\project_amnote\admin\views\v_register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b74c3623c9148_96179771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71fca3d3c883d2f4397daa8bbf1ed5c70bf2c36b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\views\\v_register.tpl',
      1 => 1534378847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b74c3623c9148_96179771 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <a href="index.html">
                                <span><img src="public/assets/images/logo.png" alt="" height="22"></span>
                            </a>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value;
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == null) {?>
                                <p class="text-muted mb-4 mt-3">Don't have an account? Create free account</p>
                            <?php } else { ?>
                                <p class="text-warning mb-4 mt-3"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</p>
                            <?php }?>
                        </div>

                        <form method="post">
                            <div class="form-group mb-3">
                                <label for="full_name">Full Name</label>
                                <input class="form-control" type="text" id="full_name" name="full_name"
                                       value="<?php if (isset($_smarty_tpl->tpl_vars['full_name']->value)) {
echo $_smarty_tpl->tpl_vars['full_name']->value;
}?>" placeholder="Enter your name" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email address</label>
                                <input class="form-control" type="email" id="email" name="email" required placeholder="Enter your email">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" required id="password" name="password" placeholder="Enter your password">
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
