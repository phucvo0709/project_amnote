<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">{$title}</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSlider">Add Slider</button></div>
                </div>
                <!-- modal add user -->
                <div id="addSlider" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new slider</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="models/ajax/add_slider.php" class="dropzone">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <div class="fallback">
                                            <input type="file" name="file" multiple>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-sliders" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    {foreach $sliders as $slider}
                        <tr id="delete_slider{$slider->id}">
                            <td>{$slider->id}</td>
                            <td>
                                <img class="img-thumbnail" src="./../{$slider->file}" style="max-width: 280px; max-height: 280px"/>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" onClick="deleteSlider({$slider->id})">Delete</button>
                            </td>
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
        $("#table-sliders").DataTable({
            "order": []
        });
        $('#addSlider').on('hidden.bs.modal', function () {
            location.reload();
        });
    });
    function deleteSlider(id){
        let delete_id = "delete_id=" + id;
        $.ajax({
            url: "models/ajax/delete_slider",
            method: "POST",
            data: delete_id,
            success: function(data){
                $("#delete_slider" + id).hide('slow');
            }
        })
    }
</script>