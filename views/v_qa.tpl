<div id="inner-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-title">{$title}</h1>
                <div class="row">
                    {foreach $qas as $qa}
                    <div class="col-lg-12">
                        <div class="content-qa">
                            <p>
                                <i>{counter}</i> {$qa->title}
                            </p>
                            {$qa->content}
                        </div>
                    </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function(){
        $('.content-qa ul li').prepend('<li class="pe-7s-angle-down"></li>') ;
    })
</script>