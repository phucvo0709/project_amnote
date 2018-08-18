<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">{$title}</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEfficiencies">Add Efficiencies </button></div>
                </div>
                <!-- modal add user -->
                <div id="addEfficiencies" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new Efficiencies</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="add_efficienci_form">
                                <div class="modal-body">
                                    <p class="error-msg"></p>
                                    <div class="form-group">
                                        <label>Icon</label>
                                        <input type="text" class="form-control"  name="icon" placeholder="Enter Icon" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control"  name="title" placeholder="Enter Title" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_efficienci">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-efficiencies" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>Icon</th>
                        <th>Title</th>
                    </tr>
                    </thead>

                    <tbody>
                    {foreach $efficiencies as $efficienci}
                        <tr id="delete_efficienci{$efficienci->id}">
                            <td style="color: #fa7338">{$efficienci->icon}</td>
                            <td><span class="overflow-text">{$efficienci->title}</span></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateEfficienci{$efficienci->id}">Update</button>
                                <button type="button" class="btn btn-danger" onClick="deleteEfficienci({$efficienci->id})">Delete</button>
                            </td>
                            <!-- modal update -->
                            <div id="updateEfficienci{$efficienci->id}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Update Efficienci</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form method="post" id="update_efficienci_form{$efficienci->id}">
                                            <div class="modal-body">
                                                <p class="error-msg-update{$efficienci->id}"></p>
                                                <input type="hidden" name="id" value="{$efficienci->id}">
                                                <div class="form-group">
                                                    <label>Icon</label>
                                                    <input type="text" class="form-control" name="icon" placeholder="Enter Icon"
                                                           value='{$efficienci->icon}' required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Efficienci"
                                                           value="{$efficienci->title}" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updateEfficienci({$efficienci->id})">Save changes</button>
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
        $("#add_efficienci_form").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/add_efficienci",
                method: "POST",
                data: $("#add_efficienci_form").serialize(),
                success: function(data){
                    $(".error-msg").html(data);
                }
            })
        })
    });
    function updateEfficienci(id){
        $("#update_efficienci_form" + id).on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_efficienci",
                method: "POST",
                data: $("#update_efficienci_form" + id).serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function deleteEfficienci(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_efficienci",
            method: "POST",
            data: delete_id,
            success: function(data){
                $("#delete_efficienci" + id).hide('slow');
            }
        })
    }
</script>