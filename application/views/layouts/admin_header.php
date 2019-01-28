<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>E-WAYS - Admin</title>
        <!-- Bootstrap core CSS-->
        <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="<?php echo base_url() ?>assets/css/sb-admin.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon/favicon.ico" type="image/x-icon">
        <style>
            #mainNav{
                background-color: #103A5C
            }
            #page-top{
                background-color: #103A5C
            }
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #15212A;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: whitesmoke;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {
                background-color: #FEC000;
                color: black;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }
            #navhover:hover{
                text-decoration: none;
                color: #FEC000

            }
            #navhover{
                color: white
            }
        </style>

    </head>

    <body class="fixed-nav sticky-footer" id="page-top">
        <!--        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav"> 
            <a class="navbar-brand" href="http://sict-iis.nmmu.ac.za/eways/index.php/admin_home">
                <img style="height: 40px; width: 40px" src="<?php echo base_url() ?>assets/images/favicon/favicon.jpg" alt="E-WAYS">
            E-WAYS
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>                       
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin_home">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin_charts">
                            <i class="fa fa-fw fa-area-chart"></i>
                            <span class="nav-link-text">Charts</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin_tables">
                            <i class="fa fa-fw fa-table"></i>
                            <span class="nav-link-text">Tables</span>
                        </a>
                    </li>
<!--                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Events">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin/events">
                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                            <span class="nav-link-text">Events</span>
                        </a>
                    </li>-->
                    
                     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Events">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin/feeds_table">
                            <i class="fa fa-rss-square" aria-hidden="true"></i>
                            <span class="nav-link-text">Feeds</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Events">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin/del_feeds_table">
                            <i class="fa fa-rss-square" aria-hidden="true"></i>
                            <span class="nav-link-text">Deleted Feeds</span>
                        </a>
                    </li>

                     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Events">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin/feeds_form">
                            <i class="fa fa-rss-square" aria-hidden="true"></i>
                            <span class="nav-link-text">New Feeds</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Events">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin/resources">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <span class="nav-link-text">Resources</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('type') == "Main"): ?>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Staff">
                            <a class="nav-link" href="<?php echo site_url() ?>/admin/add_user">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span class="nav-link-text">Add User</span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php foreach ($admin_details->result() as $value) { ?>
                        <li class="nav-item dropdown">&nbsp;&nbsp;
                            <img src="<?php echo base_url(); ?>uploads/user_profiles/<?php echo $value->photo ?>" alt="user picture" style="width:23px; height:23px;border-radius: 100%;" />
                            <a id="navhover"><?php echo $value->first_name . " " . $value->last_name ?>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-content">
                                <a href="<?php echo site_url(); ?>/admin/profile"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
                                <a data-toggle="modal"  href="#exampleModal"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                            </div>
                        </li>
                    <?php } ?> 
                </ul>

                <ul class="navbar-nav ml-auto">
                    <!--            <li class="nav-item">
                                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Search for...">
                                            <span class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </li>-->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>





































































































