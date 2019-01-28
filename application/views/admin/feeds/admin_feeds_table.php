<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>




<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo site_url() ?>/admin_home">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Feeds</li>
</ol>
<div class="row">
  <div class="col-12">
    <div class="container-fluid">


        <div>
            <table id="example" class="table table-striped table-bordered table-hover table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Title</th>
                        <th>Created</th>
                        <th scope="col">Short Description</th>
                        <th scope="col">Description</th>
                        <th scope="col">Link</th>
                        <th scope="col">Image</th>
                        <th scope="col">Last Updated</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr> 
                </thead>
                <tbody>
                 <?php foreach ($feeds_list as $row){?>
                    <tr>
                        <td><?php echo $row['title']; ?></td>
                        <td class="dates"><?php echo date('l, M j, Y', strtotime($row['created'])); ?></td>
                        <td><?php echo $row['shortDescription']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['link']; ?></td>
                        <td>
                            <a class="example-image-link" href="<?php echo base_url() ?>uploads/feeds/<?php echo $row['picture_path']; ?>" data-lightbox="<?php echo $row['picture_path']; ?>" data-title="<?php echo $row['picture_path']; ?>"><img class="example-image" src="<?php echo base_url() ?>uploads/feeds/<?php echo $row['picture_path']; ?>" alt="" height="40" width="40"/></a>
                        </td>
                        <td class="dates"><?php echo date('l, M j, Y', strtotime($row['updated'])); ?></td>
                    </td>
                    <td ><a href="<?php echo site_url() ?>/admin/edit_feeds/<?php echo $row['feed_id']; ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></td>
                    <td ><a href="<?php echo site_url() ?>/admin/delete/<?php echo $row['feed_id']; ?>"><i class="fa fa-trash fa-2x" aria-hidden="true"></i>
</a></td>
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
</div>
<!-- /.row-->
<!-- /.row-->
</div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->