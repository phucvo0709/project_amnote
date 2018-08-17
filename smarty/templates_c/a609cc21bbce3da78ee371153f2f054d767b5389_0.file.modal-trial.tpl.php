<?php
/* Smarty version 3.1.30, created on 2018-08-17 13:55:30
  from "C:\xampp\htdocs\project_amnote\smarty\templates\modal-trial.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b76b7b21e6680_67478553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a609cc21bbce3da78ee371153f2f054d767b5389' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_amnote\\smarty\\templates\\modal-trial.tpl',
      1 => 1534506928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b76b7b21e6680_67478553 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Modal -->
<div class="modal fade" id="modalTrial" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i>Please provide a external information for we support you better.</i>
                </h5>
            </div>
            <div class="modal-body text-center">
                <div role="form" id="form">
                    <div class="screen-reader-response"></div>
                    <form method="post" id="send_info">
                        <div class="contact-download1">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label class="float-left">Your Company</label>
                                    <input type="text" name="company" value="" size="40" class="form-control"
                                           placeholder="Your Company" required>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label class="float-left">Your address</label>
                                    <input type="text" name="address" class="form-control"
                                           placeholder="Your Address" required>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label class="float-left">Your City</label>
                                    <input type="text" name="city" value="" class="form-control"
                                           placeholder="Your City" required>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label class="float-left mb-0">Your Name</label><br>
                                    <div class="row">
                                        <select name="sex" class="form-control col-lg-2">
                                            <option value="Mr">Mr</option>
                                            <option value="Ms">Ms</option>
                                        </select>
                                        <input type="text" name="name" value="" size="40" class="form-control col-lg-10"
                                               placeholder="Your name" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label class="float-left">Your Email</label>
                                    <input type="email" name="email" value="" class="form-control"
                                           placeholder="Your Email" required>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label class="float-left">Your Phone</label>
                                    <input type="text" name="phone" value="" class="form-control"
                                           placeholder="Your Phone" required>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn button-custom btn-lg mb-2">Send</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer" style="background-color: #f3f3f3;">
                <button type="button" class="btn button-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $("#send_info").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/send_info",
                method: "POST",
                data: $("#send_info").serialize(),
                success: function(data){
                    alert('We have received your information and will contact you shortly');
                    location.reload();
                }
            })
        })
    });
<?php echo '</script'; ?>
><?php }
}
