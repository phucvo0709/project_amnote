<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">{$title}</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFirm">Add Accounting Firm</button></div>
                </div>
                <!-- modal add user -->
                <div id="addFirm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new accounting firm</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="add_firm_form">
                                <div class="modal-body">
                                    <p class="error-msg"></p>
                                    <div class="form-group">
                                        <label>Firm</label>
                                        <input type="text" class="form-control"  name="content" placeholder="Enter Firm" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_firm">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-firms" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Firm</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    {foreach $firms as $firm}
                        <tr id="delete_firm{$firm->id}">
                            <td>{counter}</td>
                            <td><span class="overflow-text">{$firm->content}</span></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateFirm{$firm->id}">Update</button>
                                <button type="button" class="btn btn-danger" onClick="deleteFirm({$firm->id})">Delete</button>
                            </td>
                            <!-- modal update -->
                            <div id="updateFirm{$firm->id}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Update Firm</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form method="post" id="update_firm_form{$firm->id}">
                                            <div class="modal-body">
                                                <p class="error-msg-update{$firm->id}"></p>
                                                <input type="hidden" name="id" value="{$firm->id}">
                                                <div class="form-group">
                                                    <label>Firm</label>
                                                    <input type="text" class="form-control" name="content" placeholder="Enter Firm"
                                                           value="{$firm->content}" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updateFirm({$firm->id})">Save changes</button>
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
        $("#table-firms").DataTable();
        $("#add_firm_form").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/add_firm",
                method: "POST",
                data: $("#add_firm_form").serialize(),
                success: function(data){
                    $(".error-msg").html(data);
                }
            })
        })
    });
    function updateFirm(id){
        $("#update_firm_form" + id).on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_firm",
                method: "POST",
                data: $("#update_firm_form" + id).serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function deleteFirm(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_firm",
            method: "POST",
            data: delete_id,
            success: function(data){
                $("#delete_firm" + id).hide('slow');
            }
        })
    }
</script>