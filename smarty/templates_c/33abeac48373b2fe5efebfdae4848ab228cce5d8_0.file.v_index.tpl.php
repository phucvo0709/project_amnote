<?php
/* Smarty version 3.1.30, created on 2018-08-15 15:41:20
  from "C:\xampp\htdocs\project_amnote\views\v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b742d804719e8_65752481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33abeac48373b2fe5efebfdae4848ab228cce5d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\views\\v_index.tpl',
      1 => 1534340478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b742d804719e8_65752481 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="section-home image-bg">
    <div class="container">
        <div class="content-home text-center wow fadeIn animated">
            <h3>AMnote <br /><span>Accounting Program</span></h3>
            <p class="btn-inline mt-4">
                <a href="#try" id="goTry" class="btn button-white btn-lg mt-2">Try software</a>
                <a href="#" class="btn button-custom btn-lg mt-2" data-toggle="modal" data-target="#modalTrial">Sign up for a trial</a>
            </p>
            <!-- Modal -->
            <div class="home-slider">
                <div class="slider-wrapper">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="public/images/slider/1.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="public/images/slider/2.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="public/images/slider/3.png" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <img src="public/images/imac.png" class="img-fluid" alt="Slider_Holder_Img">
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="section-features wow fadeIn animated">
    <div class="container">
        <div class="feature-header">
            <h3 class="feature-heading text-center"><span>Efficiency</span></h3>
        </div>
        <div class="feature-content">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['efficiencies']->value, 'efficiency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['efficiency']->value) {
?>
                <div class="col-lg-4">
                    <div class="feature-box">
                        <?php echo $_smarty_tpl->tpl_vars['efficiency']->value->icon;?>

                        <div class="feature-text">
                            <h5><?php echo $_smarty_tpl->tpl_vars['efficiency']->value->title;?>
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
        <div class="feature-more text-center">
            <a class="btn button-custom" href="chart-of-service-configuration">View more</a>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section id="try" class="section-description">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow slideInLeft">
                <img src="public/images/device-1.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 mt-4 wow slideInRight">
                <div class="collapse-description" id="accordion">
                    <div class="card" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div id="headingOne">
                            <h5 class="mb-0">
                                <a class="button-description">
                                    <i class="pe-7s-angle-down pe-description"></i>
                                    Try the program
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>After installation is completed, it can use the demo version</p>
                                <p style="text-align: center;">
                                    <a class="btn button-custom btn-lg" href="http://amnote.com.vn/wp-content/uploads/dowload/setup.exe"> Download</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div id="headingTwo">
                            <h5 class="mb-0">
                                <a class="button-description">
                                    <i class="pe-7s-angle-down pe-description"></i>
                                    Using instruction
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>Click the button below to download instruction</p>
                                <p style="text-align: center;">
                                    <a class="btn button-custom btn-lg" href="http://amnote.com.vn/wp-content/uploads/dowload/setup.exe"> Download Document</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        <div id="heading3">
                            <h5 class="mb-0">
                                <a class="button-description">
                                    <i class="pe-7s-angle-down pe-description"></i>
                                    Video instruction
                                </a>
                            </h5>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>Click the button below to download instruction</p>
                                <ul class="list_video">
                                    <li>
                                        <a href="https://www.youtube.com/watch?v=2jZGhQ78_tk"><i class="fa fa-youtube"></i> 1. Quản lý dữ liệu cơ bản – Menu BC, BG, BH, BF</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-more text-center">
            <a class="btn button-custom" href="main-functions">View more</a>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="section-count wow fadeIn animated">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h3>Over 653 companies which use Amnote program</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-3">
                <div class="content-count">
                    <span class="counter-number">10</span>
                    <span class="counter-text">Upgrade version</span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="content-count">
                    <span class="counter-number">7</span>
                    <span class="counter-text">Year Effect</span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="content-count">
                    <span class="counter-number">92</span>
                    <span class="counter-text">Staff</span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="content-count">
                    <span class="counter-number">653</span>
                    <span class="counter-text">Companies use</span>
                </div>
            </div>
        </div>
        <div class="count-more text-center">
            <a class="btn button-custom" href="expected-effects">View more</a>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="section-screenshot d-none d-lg-block wow fadeIn animated">
    <div class="container">
        <div class="feature-header">
            <h3 class="feature-heading text-center"><span>Screentshot</span></h3>
        </div>
        <div class="text-center">
            <div class="screenshot-slider">
                <div class="screenshot-wrapper">
                    <div id="screenshot" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="public/images/slider/1.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="public/images/slider/2.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="public/images/slider/3.png" alt="First slide">
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#screenshot" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#screenshot" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <img src="public/images/browser.png" class="img-fluid" alt="Slider_Holder_Img">
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="section-pricing wow fadeIn animated">
    <div class="container">
        <div class="feature-header">
            <h3 class="feature-heading text-center"><span>Pricing</span></h3>
        </div>
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prices']->value, 'pricing');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pricing']->value) {
?>
            <div class="col-lg-4 mb-4">
                <div class="pricing-wrapper">
                    <div class="pricing-head <?php if ($_smarty_tpl->tpl_vars['pricing']->value->special === 'yes') {?>popular<?php }?>">
                        <p><span class="pricing-price <?php if ($_smarty_tpl->tpl_vars['pricing']->value->special === 'yes') {?>popular<?php }?>"><?php echo $_smarty_tpl->tpl_vars['pricing']->value->price;?>
</span></p>
                        <h4>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locations']->value, 'location');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['location']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['pricing']->value->id == $_smarty_tpl->tpl_vars['location']->value->id_prices) {?>
                                <?php echo $_smarty_tpl->tpl_vars['location']->value->location;?>
<br>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </h4>
                    </div>
                    <ul>
                        <li><?php echo $_smarty_tpl->tpl_vars['pricing']->value->description;?>
</li>
                    </ul>
                    <div class="pricing-bottom"></div>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        <div class="pricing-more text-center">
            <a class="btn button-custom" href="how-to-buy-program">View more</a>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="section-contact">
    <div class="container">
        <div class="feature-header">
            <h3 class="feature-heading text-center contact-heading"><span>Contact</span></h3>
        </div>
        <div class="container">
            <form method="post">
                <ul class="listForm row">
                    <li class="col-lg-6">
                        <input type="text" name="your-name" value="" size="40" class="form-control mb-4" aria-required="true" aria-invalid="false" placeholder="Enter your full name">
                    </li>
                    <li class="col-lg-6">
                        <input type="email" name="your-email" value="" size="40" class="form-control mb-4" aria-required="true" aria-invalid="false" placeholder="Enter your email address">
                    </li>
                    <li class="push col-lg-12">
                        <textarea name="your-message" cols="40" rows="6" class="form-control mb-4" aria-required="true" aria-invalid="false" placeholder="Write something for us"></textarea>
                    </li>
                    <li class="push text-center col-lg-12">
                        <input type="submit" value="Send message" class="btn button-custom btn-lg">
                    </li>
                </ul>
                <div class="wpcf7-response-output wpcf7-display-none"></div></form>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php }
}
