<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">{$title}</h4></div>
                </div>
                <form method="POST" id="update_info_form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="hinh" style="margin-bottom: 10px">Logo Company:</label>
                        <p class="error-msg-update"></p>
                        <div class="row">
                            <div class="col col-4">
                                <div class="input-file-container">
                                    <input class="input-file" type="file" name="image" id="file"/>
                                    <label tabindex="0" for="my-file" class="input-file-trigger">Upload Logo</label>
                                </div>
                                <p class="file-return"></p>
                            </div>
                            <div class="col col-3">
                                <img id="hienThi" class="img-fluid" src="./../{$logo}"/>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn_update" onClick="updateLogo()">Update Logo</button>
                </form>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
<script src="public/js/input_file.js"></script>
<script src="public/js/script_hien_thi_anh_add.js"></script>
<script src="public/js/script_hien_thi_anh.js"></script>
<script>
    function updateLogo(){
        $("#update_info_form").on("submit", function(e){
            e.preventDefault();
            let dataForm = new FormData(this);
            $.ajax({
                url: "models/ajax/update_logo",
                type: "POST",
                data: dataForm,
                mimeTypes:"multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                success: function(data){
                    $(".error-msg-update").html(data);
                }
            })
        })
    }
</script>