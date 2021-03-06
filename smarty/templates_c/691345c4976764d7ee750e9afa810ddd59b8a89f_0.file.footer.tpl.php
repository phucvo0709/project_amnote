<?php
/* Smarty version 3.1.30, created on 2018-08-19 02:14:04
  from "C:\xampp\htdocs\project_amnote\smarty\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b78b64cbdbb89_03930682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '691345c4976764d7ee750e9afa810ddd59b8a89f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\smarty\\templates\\footer.tpl',
      1 => 1534637643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modal-trial.tpl' => 1,
  ),
),false)) {
function content_5b78b64cbdbb89_03930682 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer>
    <div class="top-footer text-left">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-logo">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" class="img-fluid" alt="">
                        <p class="mt-2"><?php echo $_smarty_tpl->tpl_vars['title_website']->value;?>
</p>
                        <p class="mt-2"><?php echo $_smarty_tpl->tpl_vars['description_website']->value;?>
</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><small>Main functions</small></h4>
                    <ul>
                        <li><a href="#">Basic information</a></li>
                        <li><a href="#">Tax</a></li>
                        <li><a href="#">Inputing book and ledger</a></li>
                        <li><a href="#">Fixed asset</a></li>
                        <li><a href="#">Financial statement</a></li>
                        <li><a href="#">Inventory asset</a></li>
                        <li><a href="#">Payroll</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h4><small>Technology and all rights</small></h4>
                    <ul class="mt-4">
                        <li class="mb-2"><span><i class="fa fa-phone"></i><?php echo $_smarty_tpl->tpl_vars['phone1']->value;?>
</span></li>
                        <li class="mb-2"><span><i class="fa fa-mobile"></i><?php echo $_smarty_tpl->tpl_vars['phone2']->value;?>
</span></li>
                        <li class="mb-2"><span><i class="fa fa-envelope"></i>  <a href="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</a></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="footer1"></p><p class="copy-right" style="text-align: center;"><span class="tencty">AMnote</span>
                    Address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>
<br>
                    Tel : <?php echo $_smarty_tpl->tpl_vars['phone1']->value;?>
 – <?php echo $_smarty_tpl->tpl_vars['phone2']->value;?>
 / Fax : <?php echo $_smarty_tpl->tpl_vars['fax']->value;?>
 <br>
                    Copyright&nbsp;© 2018 Amnote. All Rights Reserved.</p><p></p>
            </div>
        </div>
    </div>
</footer>
<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['title']->value == 'Home') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:modal-trial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }
}
echo '<script'; ?>
 src="public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $( document ).ready(function() {
        new WOW().init();
        var loc = window.location.href;
        $('#navbar ul li a').each(function () {
            var status = loc.indexOf($(this).attr('href'));
            $(this).closest('li').removeClass('active-nav');

            if ( -1 != status ) {
                $(this).closest('li').addClass('active-nav');
            }

        });
        $('#goTry').on('click', function(e){
            e.preventDefault();
            $('html, body').stop().animate({
                scrollTop: $('#try').offset().top
            }, 1000);
        });
    });

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
