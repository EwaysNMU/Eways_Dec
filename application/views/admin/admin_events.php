<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Navigation-->
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url() ?>/admin_home">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Events</li>
        </ol>
        <p style="color:#EDAD2A" align="center">
            <?php if ($this->session->flashdata('flash_Success')): ?>
                <?php echo $this->session->flashdata('flash_Success') ?>
            <?php endif ?>
        </p>
        <script>
            $(document).ready(function () {
                $('div#deleted').delay(5000).fadeOut(400);
                jQuery("div#deleted").show();
                jQuery("div#deleted").html(localStorage.getItem("r_deleted"));
                localStorage.clear("r_deleted");
            });
        </script>

        <div id="deleted" style="color:#EDAD2A" align="center">
        </div>
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-calendar-o"></i> Events</div>
                                    <div class="card-body">
                                        <a style="margin-bottom: 10px" class="btn btn-info pull-right" href="<?php echo site_url() ?>/admin/add_resources_">Add Events</a>
                                        <table id="example" class="display responsive nowrap" style="width:100% ">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($get_events->result() as $value) { ?>
                                                    <tr>
                                                        <td><?php echo $value->title; ?></td>
                                                        <td><?php echo $value->description; ?></td>
                                                        <td>  
                                                            <a id="aedBtn" href="<?php echo site_url() ?>/admin/edit_events_/<?php echo $value->event_id . "/" . $value->title . "/" . $value->description . "/" . "?url=" . urlencode($value->file_web_url) ?>">
                                                                Edit/ </a> 
                                                            <a href="#" id="<?php echo $value->resourceID ?>" onclick="deleteResource(this);">Delete/ </a>
                                                            <a id="aedBtn" href="<?php echo site_url() ?>/admin/resources/view/<?php echo $value->title . "/" . $value->type . "/" . "?url=" . urlencode($value->file_web_url) ?>">View</a> 
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                        <!-- /.row-->


                    </div>
                </div><br>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "columnDefs": [
                {
                    "targets": [2],
                    "visible": true,
                    "searchable": false
                }
            ],
            responsive: true
        });

        t.on('order.dt search.dt', function () {
            t.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
    });
</script>
<script src="<?php echo base_url() ?>assets/js/resources_delete.js"></script>



















