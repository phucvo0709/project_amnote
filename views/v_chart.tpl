<div class="heading">
    <div class="container">
        <h1>{$title}</h1>
    </div>
</div>
<section class="section-chart wow fadeIn animated">
    <div class="container">
        <div class="feature-content">
            <div class="row">
                {foreach $charts as $chart}
                <div class="col-lg-4">
                    <div class="feature-box">
                        {$chart->icon}
                        <div class="feature-text">
                            <h5>{$chart->title}</h5>
                        </div>
                    </div>
                </div>
                {/foreach}
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
<div class="clearfix"></div>