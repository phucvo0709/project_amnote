<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">{$title}</h4></div>
                    <div class="ml-auto p-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPrice">Add Price</button></div>
                </div>
                <!-- modal add user -->
                <div id="addPrice" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Add new price</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form method="post" id="add_price_form">
                                <div class="modal-body">
                                    <p class="error-msg"></p>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control"  name="price" placeholder="Enter Price" required>
                                   </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control"  name="description" placeholder="Enter Description" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Special</label>
                                        <select class="custom-select" name="special">
                                            <option value="no">No</option>
                                            <option value="yes">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="btn_add_price">Confirm</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <table id="table-prices" class="table dt-responsive">
                    <thead>
                    <tr>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Special</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    {foreach $prices as $price}
                        <tr id="delete_price{$price->id}">
                            <td>{$price->price}</td>
                            <td><span class="overflow-text">{$price->description}</span></td>
                            <td>{$price->special}</td>
                            <td id="location_td{$price->id}">
                                {foreach $locations as $location}
                                    {if $price->id == $location->id_prices}
                                        <p id="location_index{$location->id}">{$location->location}</p>
                                    {/if}
                                {/foreach}
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updatePrice{$price->id}">Update</button>
                                <button type="button" class="btn btn-danger" onClick="deletePrice({$price->id})">Delete</button>
                            </td>
                            <!-- modal update -->
                            <div id="updatePrice{$price->id}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Update Price</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form method="post" id="update_price_form{$price->id}">
                                            <div class="modal-body">
                                                <p class="error-msg-update{$price->id}"></p>
                                                <input type="hidden" name="id" value="{$price->id}">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="text" class="form-control"  name="price"
                                                           value="{$price->price}" placeholder="Enter Price" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control" name="description"
                                                           value="{$price->description}" placeholder="Enter Description" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Special</label>
                                                    <select class="custom-select" name="special">
                                                        <option {if $price->special == 'no'} selected="selected" {/if} value="no">No</option>
                                                        <option {if $price->special == 'yes'} selected="selected" {/if}  value="yes">Yes</option>
                                                    </select>
                                                </div>

                                                <label>Location</label>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input type="text" class="form-control" id="location{$price->id}" name="location"
                                                                   placeholder="Enter Location">
                                                        </div>
                                                        <div class="col-6">
                                                            <button type="button" class="btn btn-primary" onclick="addLocation({$price->id})">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                {foreach $locations as $location}
                                                    {if $price->id == $location->id_prices}
                                                        <div class="form-group" id="delete_location{$location->id}">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <input type="text" class="form-control" id="location_input{$location->id}" name="location"
                                                                          value="{$location->location}" placeholder="Enter Location">
                                                                </div>
                                                                <div class="col-6">
                                                                    <button type="button" class="btn btn-warning" onclick="updateLocation({$location->id})">Update</button>
                                                                    <button type="button" class="btn btn-danger" onclick="deleteLocation({$location->id})">Delete</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    {/if}
                                                {/foreach}
                                                <div class="append-location{$price->id}"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group mb-3">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" onClick="updatePrice({$price->id})">Save changes</button>
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
        $("#table-prices").DataTable();
        $("#add_price_form").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/add_price",
                method: "POST",
                data: $("#add_price_form").serialize(),
                success: function(data){
                    $(".error-msg").html(data);
                }
            })
        })
    });
    function addLocation(idPrice){
        let locationData =  $('#location' + idPrice).val();
        $.ajax({
            url: "models/ajax/add_location",
            method: "POST",
            data: {
                id_price: idPrice,
                location: locationData
            },
            success: function(data){
                $(".append-location" + idPrice).after(data);
                $("#location_td" + idPrice).append(locationData);
            }
        })
    }
    function updatePrice(id){
        $("#update_price_form" + id).on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "models/ajax/update_price",
                method: "POST",
                data: $("#update_price_form" + id).serialize(),
                success: function(data){
                    $(".error-msg-update" + id).html(data);
                }
            })
        })
    }
    function updateLocation(id){
        let locationData =  $('#location_input' + id).val();
        $.ajax({
            url: "models/ajax/update_location",
            method: "POST",
            data: {
                id_location: id,
                location: locationData
            },
            success: function(data){
                $("#location_index" + id).text(data);
            }
        })

    }
    function deletePrice(id){
        let delete_id = "delete_id=" + id;

        $.ajax({
            url: "models/ajax/delete_price",
            method: "POST",
            data: delete_id,
            success: function(data){
                $("#delete_price" + id).hide('slow');
            }
        })
    }
    function deleteLocation(id){
        let delete_id = "delete_id=" + id;

        $.ajax({
            url: "models/ajax/delete_location",
            method: "POST",
            data: delete_id,
            success: function(data){
                $("#delete_location" + id).hide('slow');
                $("#location_index" + id).hide('slow');
            }
        })
    }
</script>