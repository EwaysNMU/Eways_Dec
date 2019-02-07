<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon/favicon.ico" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Login</title>
        <style>
            #center_div {
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-top:100px;
            }
            .mandelacolor {
                background-color: #103A5C;
            }
            /*            body{
                            background-image:url('<?php echo base_url() ?>assets/images/bg-Image.png');
                            
                             Center and scale the image nicely 
                            background-repeat: no-repeat; 
                            background-position: center;
                            background-attachment: fixed;       
                            webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            height:100%;
                            width:100%;
                        }*/
            #login_signup_forgot_btn {
                background-color: #103A5C; /* Mandela Blue */
                border: none;
                border-radius: 0%;
                color: white;
                padding: 10px 22px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 18px;
            }
            #login_signup_forgot_btn:hover {
                text-decoration: none;
                color: black;
                background-color:#FDB819 /*Mandela yellow */;}
            </style>
        </head>
        <body style="background-color: #F5F5F5">
        <nav class="navbar navbar-expand-lg navbar-dark mandelacolor">
            <a class="navbar-brand" href="http://sict-iis.nmmu.ac.za/eways/index.php/home">
                <img style="height: 60px; width: 220px; align:center" src="<?php echo base_url() ?>assets/images/favicon/NMU_logo.jpg" alt="E-WAYS">
                <img style="height: 60px; width: 60px" src="<?php echo base_url() ?>assets/images/favicon/favicon.jpg" alt="E-WAYS">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>
                <ul  class="navbar-nav">

                </ul>

            </div>
        </nav>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <?php $attributes = array('class' => 'was-validated', 'id' => 'login_student'); ?>
                    <?php echo form_open('student_validation', $attributes); ?>
                    <div id="center_div" class="row">
                        <div class="col-md-6 mx-auto">

                            <!-- form card login -->
                            <div class="card rounded-0">
                                <div class="card-header">
                                    <h3 class="mb-0">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                        <?php if ($this->session->flashdata('flashDanger')): ?>
                                            <div class="alert alert-danger alert-dismissible" style="">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <div class="text-center"><?= $this->session->flashdata('flashDanger') ?></div>
                                            </div>
                                        <?php endif ?>
                                        <?php if ($this->session->flashdata('flashSuccess')): ?>
                                            <div class="alert alert-success alert-dismissible" style="">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <div class="text-center"><?= $this->session->flashdata('flashSuccess') ?></div>
                                            </div>
                                        <?php endif ?>

                                        <?php if ($this->session->flashdata('verifySuccess')): ?>
                                            <div class="alert alert-success alert-dismissible" style="">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <div class="text-center"><?= $this->session->flashdata('verifySuccess') ?></div>
                                            </div>
                                        <?php endif ?>
                                        <?php if ($this->session->flashdata('verifyfailed')): ?>
                                            <div class="alert alert-warning alert-dismissible" style="">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <div class="text-center"><?= $this->session->flashdata('verifyfailed') ?></div>
                                            </div>
                                        <?php endif ?>
                                        <div class="form-group">
                                            <label for="email">Student #</label>
                                            <input type="number" placeholder="216959956" class="form-control form-control-lg rounded-0" name="studentno" id="email" required=""value="<?php if (isset($_POST['studentno'])) echo $_POST['studentno']; ?>">
                                            <div class="invalid-feedback">Oops, you missed this one.</div>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="" autocomplete="new-password">
                                            <div class="invalid-feedback">Enter your password too!</div>
                                        </div>
                                        <div>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <!-- <span class="custom-control-description small text-dark">Remember me on this computer</span> -->
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg float-right" id="login_signup_forgot_btn">Login</button>
                                    </form>
                                    <a href="<?php echo site_url() ?>/reset_password" class="float-left">Forgot Password?</a><br>
                                    <a href="<?php echo site_url() ?>/student_register_form" class="float-left">New User? Register here</a><br>
                                    <a href="<?php echo site_url() ?>/home" class="float-left">Return Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div><br><br>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $("#btnLogin").click(function (event) {

                //Fetch form to apply custom Bootstrap validation
                var form = $("#formLogin");

                if (form[0].checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.addClass('was-validated');
            });
        </script>
    </body>
</html>

