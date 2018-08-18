<div id="inner-page">
    <div class="container">
        <div class="row">
            <article class="col-lg-12">
                <h1 class="page-title">{$title}</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="meta-wrapper">
                            <ul class="meta-post">
                                <li><b> Author: </b> {$new->full_name}</li>
                                <li><b> Date : </b> {$new->time_upload|date_format:"%D"}</li>
                                <li><b> View: </b> {$new->view}</li>
                            </ul>
                        </div>
                        {$new->content}
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>