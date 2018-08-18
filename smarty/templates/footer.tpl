<footer>
    <div class="top-footer text-left">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-logo">
                        <img src="public/images/logo.png" class="img-fluid" alt="">
                        <p class="mt-2">NC9 VietNam Company Limited</p>
                        <p class="mt-2">Optimizing general management program for every company</p>
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
                        <li class="mb-2"><span><i class="fa fa-phone"></i> 84-12.8888.1000 (Korean)</span></li>
                        <li class="mb-2"><span><i class="fa fa-mobile"></i> 84.12 9999 7070 (Viet Nam)</span></li>
                        <li class="mb-2"><span><i class="fa fa-envelope"></i>  <a href="amnote@amnote.com.vn">amnote@amnote.com.vn</a></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="footer1"></p><p class="copy-right" style="text-align: center;"><span class="tencty">AMnote</span>
                    Address: 87 Nguyen Thi Thap, The New Urban Him Lam, Tan Hung Ward, District 7, HCM city <br>
                    Tel : 84-28-6251.5774 – 84.12 9999 7070 / Fax : 84-28-6251.5764 <br>
                    Copyright&nbsp;© 2017 Amnote. All Rights Reserved.</p><p></p>
            </div>
        </div>
    </div>
</footer>
{if isset($title)}
    {if $title == 'Home'}
        {include file="modal-trial.tpl"}
    {/if}
{/if}
<script src="public/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
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

</script>
</body>
</html>