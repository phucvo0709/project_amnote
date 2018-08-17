<div class="row">
    <div class="col-12">
        <!-- card informations -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">Informations</h4></div>
                </div>


                <table id="table-informations" class="table table-hover dt-responsive nowrap table-centered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Basic Info</th>
                        <th>Phone</th>
                        <th>Location</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        {foreach $informations as $information}
                        <tr>
                            <td><b>#{$information->id}</b></td>
                            <td>
                                <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">{$information->name}</a></p>
                                <span class="font-13 d-none d-sm-block">{$information->email}</span>
                            </td>

                            <td>
                                {$information->phone}
                            </td>

                            <td>
                                {$information->city}
                            </td>

                            <td>
                                {$information->date}
                            </td>

                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moreInfo{$information->id}">More</button>
                            </td>
                        </tr>
                        <!--  Modal content for the above example -->
                        <div class="modal fade" id="moreInfo{$information->id}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">More info of {$information->name}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h6>Full information</h6>
                                                <address class="line-h-24">
                                                    <b>Name: </b>{$information->sex}. {$information->name}<br>
                                                    <b>Email: </b>{$information->email}<br>
                                                    <b>Phone: </b>{$information->phone}<br>
                                                    <b>Company: </b>{$information->company}<br>
                                                    <b>Address: </b>{$information->address}, {$information->city}<br>
                                                    <b>Date send: </b>{$information->date}<br>
                                                </address>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        {/foreach}
                    </tbody>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
        <!-- card contacts -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h4 class="header-title mb-4">Contacts</h4></div>
                </div>
                <table id="table-contacts" class="table table-hover dt-responsive nowrap table-centered mt-4">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach $contacts as $contact}
                        <tr>
                            <td><b>#{$contact->id}</b></td>
                            <td>
                                <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">{$contact->full_name}</a></p>
                                <span class="font-13 d-none d-sm-block">{$contact->email}</span>
                            </td>

                            <td class="overflow-text">
                                {$contact->content}
                            </td>

                            <td>
                                {$contact->date}
                            </td>

                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moreContact{$contact->id}">More</button>
                            </td>
                        </tr>
                        <!--  Modal content for the above example -->
                        <div class="modal fade" id="moreContact{$contact->id}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">More contact of {$contact->full_name}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h6>Info</h6>
                                                <address class="line-h-24">
                                                    <b>Full Name: </b>{$contact->full_name}<br>
                                                    <b>Email: </b>{$contact->email}<br>
                                                </address>
                                            </div> <!-- end col -->
                                            <div class="col-sm-12">
                                                <h6>Contact</h6>
                                                <p>{$contact->content}</p>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
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
        $("#table-informations").DataTable();
        $("#table-contacts").DataTable();
    });
</script>