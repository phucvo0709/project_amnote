<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">{$title}</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNew">Add News</button></div>
                </div>
                <!-- modal add user -->
                <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new news</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="uploadForm" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control"  name="title" placeholder="Enter Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Desctiption</label>
                                        <input type="text" class="form-control"  name="description" placeholder="Enter Description" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea class="ckeditor form-control" type="text" name="content" placeholder="Enter Content"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-3 mr-2">
                                                <label>Thumbnail</label>
                                                <p class="error-msg"></p>
                                                <div class="input-file-container">
                                                    <input class="input-file" id="file" name="image" type="file" required>
                                                    <label tabindex="0" for="my-file" class="input-file-trigger">Upload Image</label>
                                                </div>
                                                <p class="file-return"></p>
                                            </div>
                                            <div class="col-3">
                                                <img id="hienThi" class="img-thumbnail" src="http://fakeimg.pl/280x280" style="display: none; max-width: 280px; max-height:280px"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_new">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-news" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    {foreach $news as $new}
                        <tr id="delete_new{$new->id}">
                            <td>{$new->id}</td>
                            <td><span class="overflow-text">{$new->title}</span></td>
                            <td>{$new->time_upload}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateNew{$new->id}" onClick="getId({$new->id})">Update</button>
                                <button type="button" class="btn btn-danger" onClick="deleteNew({$new->id})">Delete</button>
                            </td>
                            <!-- modal update -->
                            <div id="updateNew{$new->id}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Update New</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form method="post" id="uploadForm{$new->id}" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="{$new->id}">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control"  name="title"
                                                           value="{$new->title}" placeholder="Enter Title" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control"  name="description"
                                                           value="{$new->description}" placeholder="Enter Description" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Content</label>
                                                    <textarea class="ckeditor form-control" type="text" name="content{$new->id}"
                                                              placeholder="Enter Content">{$new->content}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col col-3 mr-2">
                                                            <label>Thumbnail</label>
                                                            <p class="error-msg-update{$new->id}"></p>
                                                            <div class="input-file-container">
                                                                <input class="input-file" type="file" name="image" id="file{$new->id}"/>
                                                                <label tabindex="0" for="my-file" class="input-file-trigger">New image</label>
                                                            </div>
                                                            <p class="file-return"></p>
                                                        </div>
                                                        <div class="col col-3">
                                                            <img id="hienThi{$new->id}" class="img-thumbnail" src="./../{$new->image}" style="max-width: 280px; max-height: 280px"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updateNew({$new->id})">Save changes</button>
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
<script src="public/js/input_file.js"></script>
<script src="public/js/script_hien_thi_anh_add.js"></script>
<script src="public/js/script_hien_thi_anh.js"></script>
<script>
    $(document).ready(function(){
        var editorRulesObject = {
            elements: {
                img: function( el ) {
                    if(el.attributes.style) {
                        el.attributes.style = 'width: 100%';
                    }
                }
            }
        };

        CKEDITOR.on('instanceReady', function( e ) {
            // Ensures that any non-styled text, or text input without any tags will be correctly styled.
            CKEDITOR.instances[e.editor.name].dataProcessor.dataFilter.addRules( editorRulesObject );
            CKEDITOR.instances[e.editor.name].dataProcessor.htmlFilter.addRules( editorRulesObject );
        });
        $("#table-news").DataTable();
        $("#uploadForm").on("submit", function(e){
            e.preventDefault();
            let dataForm = new FormData(this);
            dataForm.append('content', CKEDITOR.instances['content'].getData());
            $.ajax({
                url: "models/ajax/add_new",
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
    function updateNew(id){
        $("#uploadForm" + id).on("submit", function(e){
            e.preventDefault();
            let dataForm = new FormData(this);
            dataForm.append('content', CKEDITOR.instances['content' + id].getData());
            $.ajax({
                url: "models/ajax/update_new",
                type: "POST",
                data: dataForm,
                mimeTypes:"multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function deleteNew(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_new",
            method: "POST",
            data: delete_id,
            success: function(data){
                console.log(data)
                $("#delete_new" + id).hide('slow');
            }
        })
    }
</script>