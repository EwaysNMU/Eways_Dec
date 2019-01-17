



<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url() ?>/admin_home">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
        <p style="color:#EDAD2A" align="center">
            <?php if ($this->session->flashdata('flash_error')): ?>
                <?php echo $this->session->flashdata('flash_error') ?>
            <?php endif ?>
             <?php if ($this->session->flashdata('flashSuccess')): ?>
                <?php echo $this->session->flashdata('flashSuccess') ?>
            <?php endif ?>
            <?php if ($this->session->flashdata('flash_profile ')): ?>
                <?php echo $this->session->flashdata('flash_profile') ?>
            <?php endif ?>
        </p>
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i> Profile</div>
                                    <div class="card-body">
                                        <?php foreach ($admin_details->result() as $value) { ?>
                                        <form method="post" action="<?php echo site_url() ?>/admin/profile/update" enctype="multipart/form-data">
                                            <div class="text-center">
                    <?php if ($value->photo == "no_profile.jpeg"): ?>
                                                <img src="<?php echo base_url(); ?>uploads/user_profiles/no_profile.jpeg" class="avatar img-circle img-thumbnail" style="height:200px" alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input accept=".jpeg, .jpg, .jpe, .jfif, .jif,.png,image/*" type="file" name="userfile" class="text-center center-block file-upload">
                    <?php else: ?>
                    <img src="<?php echo base_url(); ?>uploads/user_profiles/<?php echo $value->photo ?>" class="avatar img-circle img-thumbnail" alt="avatar" style="height:200px"><br>
                    <a style="text-decoration: none;" href="<?php echo site_url(); ?>/admin/profile/remove">remove photo <i class="fa fa-times" aria-hidden="true"></i></a>
                    <input type="file" name="userfile" hidden>
               <?php endif ?>
                </div></hr><br>
                                            <div class="form-group">
                                                <label for="title"><b>First Name:</b></label>
                                                <input type="text" required class="form-control" name="f_name" value="<?php echo ucfirst($value->first_name); ?>">
                                                <?php echo form_error('f_name'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="title"><b>Last Name:</b></label>
                                                <input type="text" required class="form-control" name="l_name" value="<?php echo ucfirst($value->last_name); ?>">
                                                <?php echo form_error('l_name'); ?>
                                            </div>
<!--                                            <div class="form-group">
                                                <label for="title"><b>Password:</b></label>
                                                <input type="password" required class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                                <?php echo form_error('password'); ?>
                                            </div>
                                             <div class="form-group">
                                                <label for="title"><b>Confirm Password:</b></label>
                                                <input type="password" required class="form-control" name="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                                <?php echo form_error('confirm_password'); ?>
                                            </div>-->
                                         <input hidden type="text" name="db_photo" value="<?php echo $value->photo?>" >
                                            <button name="upload" type="submit" class="btn btn-info">Update</button>
                                        </form>
                                         <?php } ?> 
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                        <!-- /.row-->
                    </div>
                </div><br><br>
            </div>
        </div>
    </div>
</div>

























































































