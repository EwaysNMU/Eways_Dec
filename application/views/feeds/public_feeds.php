<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap core CSS-->
        <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon/favicon.ico" type="image/x-icon">
        <!-- Lightbox plugin for previewing pictures -->
        <link href="<?php echo base_url() ?>assets/lightbox/css/lightbox.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/home_footer.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/public_feeds.css">
             <!-- Google Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <title>E-WAYS</title>
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark mandelacolor">
            <a class="navbar-brand" href="http://sict-iis.nmmu.ac.za/eways/index.php/home">
                <img style="height: 40px; width: 40px" src="<?php echo base_url() ?>assets/images/favicon/favicon.jpg" alt="E-WAYS">
            </a>
            <a class="navbar-brand" href="#">E-WAYS</a>
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
                    <!--                      <li class="nav-item">
                                            <a id="navhover" class="nav-link" href="<?php echo site_url() ?>/event"><i class="fa fa-calendar"></i> Events</a>
                                        </li>-->
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
        <div class="row bootstrap snippet">
            <div class="container">
                <br>
                <a href="<?php echo site_url() ?>/home" class="float-left">Return Home</a><br>
                <div class="panel" id="daily-feed">
                    <div class="panel-heading">
                        <h3 class="panel-title">Daily feed
                            <span class="pull-right label label-round label-warning"><?php echo $num_feeds; ?>  Feeds</span>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group list-group-dividered list-group-full">
                            <?php foreach ($feeds_list as $row) { ?>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <a class="avatar avatar-away" href="javascript:void(0)">
                                                <img src="<?php echo base_url() ?>uploads/feeds/<?php echo $row['picture_path']; ?>" alt=""><i></i></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <small class="pull-right">6h ago</small>
                                                <a class="name"><?php echo $row['title']; ?></a> --
                                                <a class="name"><?php echo $row['shortDescription']; ?></a>
                                            </h4>
                                            <small>Created on <?php echo date('l, M j, Y', strtotime($row['updated'])); ?></small>
                                            <div class="content well">
                                                <?php echo $row['description']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>

                        </ul>

                        <a class="btn btn-block btn-primary waves-effect waves-lighty" href="#" role="button"><i class="icon md-chevron-down margin-right-5" aria-hidden="true"></i>Show More</a>
                    </div>
                </div>
            </div>
        </div><br>
        <!-- Footer -->
        <footer class="bottom" >
            <section id="footer">
                <div class="container">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                            <p style="color:white">Nelson Mandela University</p>
                            <p class="h6">&copy <?php echo date("Y"); ?> All right Reserved.<a class="text-green ml-2" href="https://www.mandela.ac.za" target="_blank">Peer-Collaboration</a></p>

                        </div>
                    </div>	
                </div>
            </section>
        </footer>
    </body>
    <!-- ./Footer -->
    <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
</html>


















































