<?php
/* Smarty version 3.1.30, created on 2018-08-18 13:59:49
  from "C:\xampp\htdocs\project_amnote\admin\smarty\templates\left-sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b780a35d43980_17437722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6373d57806be464541b525a680932470cab396c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\admin\\smarty\\templates\\left-sidebar.tpl',
      1 => 1534593587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b780a35d43980_17437722 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!-- LOGO -->
        <a href="./../" class="logo text-center mb-4" target="_blank">
                        <span class="logo-lg">
                            <img src="./../public/images/logo.png" alt="" height="20">
                        </span>
            <span class="logo-sm">
                            <img src="./../public/images/logo.png" alt="" height="24">
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
                    <a href="news">
                        <i class="fe-file-text"></i>
                        <span> News </span>
                    </a>
                </li>
                <li>
                    <a href="notices">
                        <i class="fe-hash"></i>
                        <span> Notices </span>
                    </a>
                </li>
                <li>
                    <a href="prices">
                        <i class="fe-dollar-sign"></i>
                        <span> Prices </span>
                    </a>
                </li>
                <li>
                    <a href="sliders">
                        <i class="fe-image"></i>
                        <span> Sliders </span>
                    </a>
                </li>
                <li>
                    <a href="accounting-firm">
                        <i class="fe-git-merge"></i>
                        <span> Accounting Firm </span>
                    </a>
                </li>
                <li>
                    <a href="efficiencies">
                        <i class="fe-copy"></i>
                        <span> Efficiencies </span>
                    </a>
                </li>
                <li>
                    <a href="other-services">
                        <i class="fe-menu"></i>
                        <span> Other Service </span>
                    </a>
                </li>
                <li>
                    <a href="qa">
                        <i class="fe-help-circle"></i>
                        <span> Q&A </span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-info"></i>
                        <span> Info Company </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="info-company">Manager Info</a>
                        </li>
                        <li>
                            <a href="logo-company">Manager Logo</a>
                        </li>
                        <li>
                            <a href="favicon-company">Manager Favicon</a>
                        </li>
                    </ul>
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
