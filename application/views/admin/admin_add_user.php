
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url() ?>/admin_home">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add User</li>
        </ol>
        <p style="color:#EDAD2A" align="center">
            <?php if ($this->session->flashdata('flash_error')): ?>
                <?php echo $this->session->flashdata('flash_error') ?>
            <?php endif ?>
             <?php if ($this->session->flashdata('flashSuccess')): ?>
                <?php echo $this->session->flashdata('flashSuccess') ?>
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
                                        <i class="fa fa-users"></i> Add User</div>
                                    <div class="card-body">
                                        <form method="post" action="<?php echo site_url() ?>/admin/add_user_" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="title"><b>First Name:</b></label>
                                                <input type="text" required class="form-control" name="f_name" value="<?php if (isset($_POST['f_name'])) echo $_POST['f_name']; ?>">
                                                <?php echo form_error('f_name'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="title"><b>Last Name:</b></label>
                                                <input type="text" required class="form-control" name="l_name" value="<?php if (isset($_POST['l_name'])) echo $_POST['l_name']; ?>">
                                                <?php echo form_error('l_name'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="title"><b>Password:</b></label>
                                                <input type="password" required class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                                <?php echo form_error('password'); ?>
                                            </div>
                                             <div class="form-group">
                                                <label for="title"><b>Confirm Password:</b></label>
                                                <input type="password" required class="form-control" name="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                                <?php echo form_error('confirm_password'); ?>
                                            </div>
                                            <button name="upload" type="submit" class="btn btn-info">Submit</button>
                                        </form>
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

























































































