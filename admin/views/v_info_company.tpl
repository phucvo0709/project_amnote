<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">{$title}</h4></div>
                </div>
                {foreach $infos as $info}
                    <form method="post" id="update_info_form">
                        <div class="modal-body">
                            <p class="error-msg-update{$info->id}"></p>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter title"
                                       value="{$info->title}" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" placeholder="Enter Description" required>{$info->description}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Enter address"
                                       value="{$info->address}" required>
                            </div>
                            <div class="form-group">
                                <label>Phone 1</label>
                                <input type="text" class="form-control" name="phone1" placeholder="Enter Phone"
                                       value="{$info->phone1}" required>
                            </div>
                            <div class="form-group">
                                <label>Phone 2</label>
                                <input type="text" class="form-control" name="phone2" placeholder="Enter Phone"
                                       value="{$info->phone2}" required>
                            </div>
                            <div class="form-group">
                                <label>fax</label>
                                <input type="text" class="form-control" name="fax" placeholder="Enter fax"
                                       value="{$info->fax}" required>
                            </div>
                            <div class="form-group">
                                <label>email</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter email"
                                       value="{$info->email}" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group mb-3">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" onClick="updateInfo({$info->id})">Save changes</button>
                            </div>
                        </div>
                    </form>
                {/foreach}
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
<script>
    function updateInfo(id){
        $("#update_info_form").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_info",
                method: "POST",
                data: $("#update_info_form").serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
</script>