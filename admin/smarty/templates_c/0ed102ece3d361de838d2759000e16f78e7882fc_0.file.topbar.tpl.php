<?php
/* Smarty version 3.1.30, created on 2018-08-16 12:50:57
  from "C:\xampp\htdocs\project_amnote\admin\smarty\templates\topbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b755711e1fe70_48845109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ed102ece3d361de838d2759000e16f78e7882fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\smarty\\templates\\topbar.tpl',
      1 => 1534416656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b755711e1fe70_48845109 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topbar-right-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <small class="pro-user-name ml-1">
                    <?php if (isset($_SESSION['full_name'])) {
echo $_SESSION['full_name'];
}?>
                </small>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="logout" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>

    </ul>
    <button class="button-menu-mobile open-left disable-btn">
        <i class="fe-menu"></i>
    </button>

</div>
<!-- end Topbar --><?php }
}
