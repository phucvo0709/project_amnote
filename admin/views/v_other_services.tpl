<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">{$title}</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addService">Add Other Service</button></div>
                </div>
                <!-- modal add user -->
                <div id="addService" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new other service</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="add_firm_form">
                                <div class="modal-body">
                                    <p class="error-msg"></p>
                                    <div class="form-group">
                                        <label>Service</label>
                                        <input type="text" class="form-control"  name="content" placeholder="Enter Service" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_service">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-services" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Service</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    {foreach $services as $service}
                        <tr id="delete_service{$service->id}">
                            <td>{counter}</td>
                            <td><span class="overflow-text">{$service->content}</span></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateService{$service->id}">Update</button>
                                <button type="button" class="btn btn-danger" onClick="deleteService({$service->id})">Delete</button>
                            </td>
                            <!-- modal update -->
                            <div id="updateService{$service->id}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Update Service</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form method="post" id="update_service_form{$service->id}">
                                            <div class="modal-body">
                                                <p class="error-msg-update{$service->id}"></p>
                                                <input type="hidden" name="id" value="{$service->id}">
                                                <div class="form-group">
                                                    <label>Service</label>
                                                    <input type="text" class="form-control" name="content" placeholder="Enter Service"
                                                           value="{$service->content}" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updateService({$service->id})">Save changes</button>
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
        $("#add_service_form").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/add_service",
                method: "POST",
                data: $("#add_service_form").serialize(),
                success: function(data){
                    $(".error-msg").html(data);
                }
            })
        })
    });
    function updateService(id){
        $("#update_service_form" + id).on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_service",
                method: "POST",
                data: $("#update_service_form" + id).serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function deleteService(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_service",
            method: "POST",
            data: delete_id,
            success: function(data){
                console.log(data)
                $("#delete_service" + id).hide('slow');
            }
        })
    }
</script>