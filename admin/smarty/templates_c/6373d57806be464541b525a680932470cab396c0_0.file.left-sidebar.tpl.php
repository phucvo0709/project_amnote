<?php
/* Smarty version 3.1.30, created on 2018-08-16 13:33:50
  from "C:\xampp\htdocs\project_amnote\admin\smarty\templates\left-sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b75611e2e9cb0_84525130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6373d57806be464541b525a680932470cab396c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\smarty\\templates\\left-sidebar.tpl',
      1 => 1534419227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b75611e2e9cb0_84525130 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!-- LOGO -->
        <a href="index.html" class="logo text-center mb-4">
                        <span class="logo-lg">
                            <img src="public/assets/images/logo.png" alt="" height="20">
                        </span>
            <span class="logo-sm">
                            <img src="public/assets/images/logo-sm.png" alt="" height="24">
                        </span>
        </a>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Manager</li>

                <li>
                    <a href="users">
                        <i class="fe-users"></i>
                        <span> Manager Users </span>
                    </a>
                </li>
                <li>
                    <a href="accounting-firm">
                        <i class="fe-git-merge"></i>
                        <span> Accounting Firm </span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End --><?php }
}
