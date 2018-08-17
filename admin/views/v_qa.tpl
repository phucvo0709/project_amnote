<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">{$title}</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addQa">Add Q&A</button></div>
                </div>
                <!-- modal add user -->
                <div id="addQa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new Q&A</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="add_qa_form">
                                <div class="modal-body">
                                    <p class="error-msg"></p>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control"  name="title" placeholder="Enter Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea class="ckeditor form-control" type="text" id="content" name="content" placeholder="Enter Content"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_qa">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-qa" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Firm</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    {foreach $qas as $qa}
                        <tr id="delete_qa{$qa->id}">
                            <td>{counter}</td>
                            <td><span class="overflow-text">{$qa->title}</span></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateQa{$qa->id}">Update</button>
                                <button type="button" class="btn btn-danger" onClick="deleteQa({$qa->id})">Delete</button>
                            </td>
                            <!-- modal update -->
                            <div id="updateQa{$qa->id}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Update Q&A</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form method="post" id="update_qa_form{$qa->id}">
                                            <div class="modal-body">
                                                <p class="error-msg-update{$qa->id}"></p>
                                                <input type="hidden" name="id" value="{$qa->id}">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Firm"
                                                           value="{$qa->title}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Content</label>
                                                    <textarea class="ckeditor form-control" type="text" name="content{$qa->id}" placeholder="Enter Content">{$qa->content}</textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updateQa({$qa->id})">Save changes</button>
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
        $("#table-qa").DataTable();
        $("#add_qa_form").on("submit", function(e){
            e.preventDefault();
            for(instance in CKEDITOR.instances){
                CKEDITOR.instances['content'].updateElement();
            }
            $.ajax({
                url: "models/ajax/add_qa",
                method: "POST",
                data: $("#add_qa_form").serialize(),
                success: function(data){
                    $(".error-msg").html(data);
                }
            })
        })
    });
    function updateQa(id){
        $("#update_qa_form" + id).on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_qa",
                method: "POST",
                data: $("#update_qa_form" + id).serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function deleteQa(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_qa",
            method: "POST",
            data: delete_id,
            success: function(data){
                $("#delete_qa" + id).hide('slow');
            }
        })
    }
</script>