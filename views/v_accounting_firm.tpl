<div class="heading">
    <div class="container">
        <h1>{$title}</h1>
    </div>
</div>
<section class="section-accounting-firm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-news">
                    <ul class="list-group-striped">
                        {foreach $accounting_firms as $accounting_firm}
                            <li class="list-group-item"><b>{$accounting_firm->id} .</b> {$accounting_firm->content}</li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>