<div id="inner-page">
    <div class="container mb-4">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-title">{$title}</h1>
                <div class="row">
                    <div class="col-lg-4">
                        <img width="250" height="206" src="http://amnote.com/wp-content/uploads/2017/03/imac-amnote-300x248-250x206.png" class="img-fluid" alt="imac-amnote-300x248-250x206">
                        <img width="250" height="291" src="http://amnote.com/wp-content/uploads/2017/03/468992809-250x291.png" class="img-fluid" alt="468992809-250x291">
                    </div>
                    <div class="col-lg-8">
                        <p><strong class="service1">AMnote Vietnam is professional in service of accounting and administration as follow:</strong></p>
                        <ul class="service02">
                            {foreach $other_services as $other_service}
                                <li>{$other_service->content}</li>
                            {/foreach}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>