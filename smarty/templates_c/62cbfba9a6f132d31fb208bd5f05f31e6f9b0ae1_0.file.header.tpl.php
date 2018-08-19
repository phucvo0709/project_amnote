<?php
/* Smarty version 3.1.30, created on 2018-08-18 14:15:45
  from "C:\xampp\htdocs\project_amnote\smarty\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b780df1033b14_85640779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62cbfba9a6f132d31fb208bd5f05f31e6f9b0ae1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\smarty\\templates\\header.tpl',
      1 => 1534594540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b780df1033b14_85640779 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <div class="parent-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg child-nav navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href=".">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" style="max-height: 48px; max-width: 125px">
                </a>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href=".">HOME</a>
                        </li>
                        <li class="nav-item dropdown show">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                AMNOTE PROGRAM
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                <a class="dropdown-item" href="chart-of-service-configuration">CHART OF PROGRAM DESCRIPTION</a>
                                <a class="dropdown-item" href="expected-effects">EXPECTED EFFECTS</a>
                                <a class="dropdown-item" href="amnote-for-accounting-firm">AMNOTE –  FOR ACCOUNTING FIRM</a>
                                <a class="dropdown-item" href="main-functions">AMAIN FUNCTIONS</a>
                                <a class="dropdown-item" href="how-to-buy-program">HOW TO BUY PROGRAM</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="order-service">OTHER SERVICE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="notice">NOTICE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="qa">Q&A</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header><?php }
}
