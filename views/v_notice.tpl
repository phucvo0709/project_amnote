<div id="inner-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-title">{$title}</h1>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th>View</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach $notices as $notice}
                        <tr>
                            <td>{$notice->id}</td>
                            <td>{$notice->title}</td>
                            <td>Koojinyoung</td>
                            <td>{$notice->time_upload}</td>
                            <td>{$notice->view}</td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>