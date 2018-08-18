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
                        <th>Date upload</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach $notices as $notice}
                        <tr>
                            <td>{$notice->id}</td>
                            <td><a href="{$notice->file}" download>{$notice->title}</a></td>
                            <td>{$notice->full_name}</td>
                            <td>{$notice->time_upload|date_format:"%D"}</td>
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
        $('#table-notices').DataTable({
            "order": []
        });
    } );
</script>