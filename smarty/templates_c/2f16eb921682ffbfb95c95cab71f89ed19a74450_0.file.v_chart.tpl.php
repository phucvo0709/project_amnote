<?php
/* Smarty version 3.1.30, created on 2018-08-15 15:57:04
  from "C:\xampp\htdocs\project_amnote\views\v_chart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b743130483102_32136707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f16eb921682ffbfb95c95cab71f89ed19a74450' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\views\\v_chart.tpl',
      1 => 1534341422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b743130483102_32136707 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="heading">
    <div class="container">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    </div>
</div>
<section class="section-chart wow fadeIn animated">
    <div class="container">
        <div class="feature-content">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['charts']->value, 'chart');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['chart']->value) {
?>
                <div class="col-lg-4">
                    <div class="feature-box">
                        <?php echo $_smarty_tpl->tpl_vars['chart']->value->icon;?>

                        <div class="feature-text">
                            <h5><?php echo $_smarty_tpl->tpl_vars['chart']->value->title;?>
</h5>
                        </div>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<div class="row">
    <div class="col-lg-4 animated fadeIn" style="background-color: #aed581 !important">
        <div class="darna-process">
            <h3>1</h3>
            <h5>Using program is very easy and convenient</h5>
        </div>
    </div>
    <div class="col-lg-4 animated fadeIn" style="background-color: #00bcd4 !important">
        <div class="darna-process">
            <h3>2</h3>
            <h5>Using program is very easy and convenient</h5>
        </div>
    </div>
    <div class="col-lg-4 animated fadeIn" style="background-color: #37394c !important">
        <div class="darna-process">
            <h3>3</h3>
            <h5>Using program is very easy and convenient</h5>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<section class="section-chart-content">
    <div class="container">
        <div class="row wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
            <div class="col-lg-3">
                <div class="text-center mb-4">
                    <span class="fa fa-language fa-custom"></span>
                </div>
                <div class="content_element">
                    <h5 class="text-center pb-2">Multi languages support</h5>
                    <p class="text-center pb-2">English, Vietnamese and Korean</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="text-center mb-4">
                    <span class="fa fa-money fa-custom"></span>
                </div>
                <div class="content_element">
                    <h5 class="text-center pb-2">Low cost</h5>
                    <p class="text-center pb-2">Low ASP price and term</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="text-center mb-4">
                    <span class="fa fa-hdd-o fa-custom"></span>
                </div>
                <div class="content_element">
                    <h5 class="text-center pb-2">Real time</h5>
                    <p class="text-center pb-2">Synchronize, sharing group data</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="text-center mb-4">
                    <span class="fa fa-shield fa-custom"></span>
                </div>
                <div class="content_element">
                    <h5 class="text-center pb-2">Stabilize data</h5>
                    <p class="text-center pb-2">Security device 3 times better</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div><?php }
}
