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
      <li class="breadcrumb-item active">New feeds</li>
    </ol>
    <div class="row">
      <div class="col-12">
        <div class="container-fluid">


          <div>
            <br>
            <?php $attributes = array('class' => '', 'id' => 'myform');
            echo form_open_multipart('admin/add_feed', $attributes); ?>

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" required name="title" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <label for="sDescription">Short Description</label>
              <input type="text" class="form-control" required name="shortDescription" id="sDescription" aria-describedby="sDescriptionHelp" placeholder="Enter Short Description">
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              <textarea type="text-area" class="form-control" required  name="description" id="Description" aria-describedby="DescriptionHelp" placeholder="Enter Full Description"></textarea>
            </div>
            <div class="form-group">
              <label for="link">Link</label>
              <input type="text" class="form-control" required name="link" id="link" placeholder="i.e. www.google.com">
            </div>
            <div class="form-group">
              <input  name="userfile" type="file" size="80">
              <?php if(isset($say_something)){
               echo $error;
             } ?>

           </div>
           <a class="btn btn-danger" href="<?php echo site_url() ?>/admin/feeds_table" role="button">Cancel</a>
           <button type="submit" class="btn btn-primary">Submit</button>
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
