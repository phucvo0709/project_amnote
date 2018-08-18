<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">{$title}</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNotice">Add Notice</button></div>
                </div>
                <!-- modal add user -->
                <div id="addNotice" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new notice</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="add_notice_form" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <p class="error-msg"></p>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control"  name="title" placeholder="Enter Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" class="form-control"  name="file" placeholder="Upload new file" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_notice">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-notices" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Upload By</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    {foreach $notices as $notice}
                        <tr id="delete_notice{$notice->id}">
                            <td>{$notice->id}</td>
                            <td><a href="./../{$notice->file}" download>{$notice->title}</a></td>
                            <td>{$notice->full_name}</td>
                            <td>{$notice->time_upload}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateNotice{$notice->id}">Update</button>
                                <button type="button" class="btn btn-danger" onClick="deleteNotice({$notice->id})">Delete</button>
                            </td>
                            <!-- modal update -->
                            <div id="updateNotice{$notice->id}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Update Notice</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form method="post" id="update_notice_form{$notice->id}">
                                            <div class="modal-body">
                                                <p class="error-msg-update{$notice->id}"></p>
                                                <input type="hidden" name="id" value="{$notice->id}">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Firm"
                                                           value="{$notice->title}" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updateNotice({$notice->id})">Save changes</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                        </tr>
                    {/foreach}
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
<script>
    $(document).ready(function(){
        $("#table-notices").DataTable({
            "order": []
        });
        $("#add_notice_form").on("submit", function(e){
            e.preventDefault();
            let dataForm = new FormData(this);
            $.ajax({
                url: "models/ajax/add_notice",
                type: "POST",
                data: dataForm,
                mimeTypes:"multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                success: function(data){
                    $(".error-msg").html(data);
                }
            })
        })
    });
    function updateNotice(id){
        $("#update_notice_form" + id).on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_notice",
                method: "POST",
                data: $("#update_notice_form" + id).serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function deleteNotice(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_notice",
            method: "POST",
            data: delete_id,
            success: function(data){
                $("#delete_notice" + id).hide('slow');
            }
        })
    }
</script>