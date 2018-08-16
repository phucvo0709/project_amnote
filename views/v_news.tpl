<div id="inner-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-title">{$title}</h1>
                <div class="row">
                    <div class="col-lg-12">
                        {foreach $news as $new}
                        <article class="wow fadeIn animated">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="{$new->image}" class="img-fluid img-thumbnail" alt="{$new->title}">
                                </div>
                                <div class="col-lg-9">
                                    <h4 class="title-post "> <a href="#">{$new->title}</a></h4>

                                    <div class="meta-post">
                                        <span>Date: {$new->time_upload}</span>
                                        <span>View: {$new->view}</span>

                                    </div>
                                    <div class="post-desc">{$new->description}</div>
                                </div>
                            </div>
                        </article>
                        {/foreach}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>