<footer>
    <div class="top-footer text-left">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-logo">
                        <img src="{$logo}" class="img-fluid" alt="">
                        <p class="mt-2">{$title_website}</p>
                        <p class="mt-2">{$description_website}</p>
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
                        <li class="mb-2"><span><i class="fa fa-phone"></i>{$phone1}</span></li>
                        <li class="mb-2"><span><i class="fa fa-mobile"></i>{$phone2}</span></li>
                        <li class="mb-2"><span><i class="fa fa-envelope"></i>  <a href="{$email}">{$email}</a></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="footer1"></p><p class="copy-right" style="text-align: center;"><span class="tencty">AMnote</span>
                    Address: {$address}<br>
                    Tel : {$phone1} – {$phone2} / Fax : {$fax} <br>
                    Copyright&nbsp;© 2018 Amnote. All Rights Reserved.</p><p></p>
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