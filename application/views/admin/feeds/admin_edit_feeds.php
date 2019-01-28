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
      <li class="breadcrumb-item active">Edit feeds</li>
    </ol>
    <div class="row">
      <div class="col-12">
        <div class="container-fluid">



          <div>
            <br>
            <?php echo form_open_multipart('admin/change_feed'); ?>
            <input type="hidden" name="feed_id" value="<?php echo $feeds_details->feed_id; ?>" />
            <input type="hidden" name="picture_path" value="<?php echo $feeds_details->picture_path; ?>" />
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" required name="title" id="title" aria-describedby="titleHelp" value="<?php echo $feeds_details->title; ?>">
            </div>
            <div class="form-group">
              <label for="sDescription">Short Description</label>
              <input type="text" class="form-control" required name="shortDescription" id="sDescription" aria-describedby="sDescriptionHelp" value="<?php echo $feeds_details->shortDescription; ?>">
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              <textarea type="text-area" class="form-control" required  name="description" id="Description" aria-describedby="DescriptionHelp" value="<?php echo $feeds_details->description; ?>"><?php echo $feeds_details->description; ?></textarea>
            </div>
            <div class="form-group">
              <label for="link">Link</label>
              <input type="text" class="form-control" required name="link" id="link"value="<?php echo $feeds_details->link; ?>">
            </div>
            <div class="form-group">
              <input  name="userfile" type="file" size="20">
              <?php if(isset($say_something)){
               echo $error;
             } ?>

           </div>
           <a class="btn btn-danger" href="<?php echo site_url() ?>/admin/feeds_table" role="button">Cancel</a>
           <button type="submit" class="btn btn-primary">Update</button>
         </form>   
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