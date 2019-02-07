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
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/home_footer.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main_header.css">
        <!--===============================================================================================-->
        <!-- Google Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/modal_popup.js"></script>
        <title>E-WAYS</title>
    </head>
    <body>

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark mandelacolor">
            <a class="navbar-brand" href="http://sict-iis.nmmu.ac.za/eways/index.php/home">
                <img style="height: 60px; width: 220px; align:center" src="<?php echo base_url() ?>assets/images/favicon/NMU_logo.jpg" alt="E-WAYS">
                <img style="height: 60px; width: 60px" src="<?php echo base_url() ?>assets/images/favicon/favicon.jpg" alt="E-WAYS">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="navhover" class="nav-link" href="<?php echo site_url() ?>"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a id="navhover" class="nav-link" href="<?php echo site_url() ?>/feeds/list_feeds"><i class="fa fa-rss-square" aria-hidden="true"></i> Feeds</a>
                    </li>
                    <li class="nav-item">
                        <a id="navhover" class="nav-link" href="<?php echo site_url() ?>/events"><i class="fa fa-calendar"></i> Events</a>
                    </li>
                </ul>
                <ul  class="navbar-nav">
                    <li class="nav-item">
                        <a id="navhover" class="nav-link" href="<?php echo site_url() ?>/student/login"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a id="navhover" class="nav-link" href="<?php echo site_url() ?>/student_register_form"> <i class="fa fa-user-plus"></i> Registration</a>
                    </li>
                    <li class="nav-item">
                        <a id="navhover" class="nav-link" href="<?php echo site_url() ?>/admin/login"> <i class="fa fa-user"></i> Staff</a>
                    </li>
                </ul>
            </div>

        </nav>
