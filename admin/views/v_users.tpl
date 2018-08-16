<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">{$title}</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">Add User</button></div>
                </div>
                <!-- modal add user -->
                <div id="addUser" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new user</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="add_user_form">
                                <div class="modal-body">
                                    <p class="error-msg"></p>
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control"  name="full_name" placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Permission</label>
                                        <select class="custom-select" name="permission">
                                            <option value="0">Member</option>
                                            <option value="1">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_user">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-users" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    {foreach $users as $user}
                    <tr id="delete_user{$user->id}">
                        <td>{$user->full_name}</td>
                        <td>{$user->email}</td>
                        <td>
                            {if $user->permission == 1}Admin
                                {elseif $user->permission == 0}Member
                            {/if}
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateUser{$user->id}">Update</button>
                            {if isset($smarty.session.id)}
                                {if $smarty.session.id !== $user->id}
                                    <button type="button" class="btn btn-danger" onClick="deleteUser({$user->id})">Delete</button>
                                {/if}
                            {/if}
                        </td>
                        <!-- modal update -->
                        <div id="updateUser{$user->id}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">User {$user->email}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                        <form method="post" id="update_user_form{$user->id}">
                                            <div class="modal-body">
                                                <p class="error-msg-update{$user->id}"></p>
                                                <input type="hidden" name="id" value="{$user->id}">
                                                <div class="form-group">
                                                    <label >Full Name</label>
                                                    <input type="text" class="form-control" name="full_name" placeholder="Enter Name"
                                                           value="{$user->full_name}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email address</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Enter email"
                                                           value="{$user->email}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>New password</label>
                                                    <input type="password" name="password" class="form-control" placeholder="New Password">
                                                </div>
                                                <div class="form-group">
                                                    <label>Permission</label>
                                                    <select class="custom-select" name="permission">
                                                        <option {if $user->permission == 1} selected="selected" {/if} value="1">Admin</option>
                                                        <option {if $user->permission == 0} selected="selected" {/if}  value="0">Member</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updateUser({$user->id})">Save changes</button>
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
        $('#table-users').DataTable( {
            "order": [[ 3, "desc" ]]
        } );
        $("#add_user_form").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/add_user",
                method: "POST",
                data: $("#add_user_form").serialize(),
                success: function(data){
                    $(".error-msg").html(data);
                }
            })
        })
    });
    function updateUser(id){
        $("#update_user_form" + id).on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_user",
                method: "POST",
                data: $("#update_user_form" + id).serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function deleteUser(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_user",
            method: "POST",
            data: delete_id,
            success: function(data){
                console.log(data)
                $("#delete_user" + id).hide('slow');
            }
        })
    }
</script>