<div id="inner-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-4">
                <h1 class="page-title">{$title}</h1>
                <table id="table-notices" class="table table-hover dt-responsive nowrap table-centered mt-4">
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
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready( function () {
        $('#table-notices').DataTable();
    } );
</script>