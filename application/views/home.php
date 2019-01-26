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
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a id="navhover" class="nav-link" href="<?php echo site_url() ?>"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
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

                <!--                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url() ?>/admin/login">Admin</a>
                                </li>-->


            </ul>
        </div>

    </nav><br><br>

    <div class="container-login100" style="background-image: url('<?php echo base_url() ?>assets/images/background.jpg');">
        <div class="container">
            <div class="row my-4">
                <div class="col-lg-8">  
                    <img class="img-fluid rounded" src="<?php echo base_url() ?>assets/images/home/e<?php echo mt_rand(1, 5); ?>.jpg" alt="e-learning pictures">
                </div>

                <div class="col-lg-4">
                    <h1><strong>EXCELLENT<br>WAYS OF<br>ACHIEVING<br>YOUR<br>SUCCESS</strong></h1>
                    <br>
                    <a class="btn btn-primary btn-lg" href="<?php echo site_url() ?>/student/login">Check out our courses -></a>
                </div>
            </div>

            <!-- Grey Strip -->
            <div class="card text-white bg-secondary my-4 text-center">
                <div class="card-body">
                    <h5 class="text-white m-0">Learning couldn't be much easier!</h5>
                </div>
            </div>

            <!-- About Us -->
            <section class="testimonials text-center bg-light">
                <!--                <h1>About us</h1><br>-->
                <div class="container">
                    <br>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 text-center mb-4"> 
                            <img class="rounded-circle img-fluid d-block mx-auto" style="height: 300px; width: 300px" src="<?php echo base_url() ?>assets/images/home/nelson_mandela.jpg" alt="Nelson-Mandela">
                            <h4>Nelson Mandela</h4>
                            <p><q>There is no passion to be found playing small - in settling for a life that is less than the one you are capable of living.</q></p>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center mb-4">
                            <img class="rounded-circle img-fluid d-block mx-auto" style="height: 280px; width: 280px" src="<?php echo base_url() ?>assets/images/home/Malala_Yousafzai.jpg" alt="Malala-Yousafzai">
                            <h4>Malala Yousafzai</h4>
                            <p><q>I raise up my voice – not so I can shout, but so that those without a voice can be heard. We cannot succeed when half of us are held back.</q></p>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center mb-4">
                            <img class="rounded-circle img-fluid d-block mx-auto" style="height: 260px; width: 260px"  src="<?php echo base_url() ?>assets/images/home/Martin-Luther-King-Jr.jpg" alt="Martin-Luther-King-Jr">
                            <h4>Martin Luther King, Jr.</h4>
                            <p><q>The function of education is to teach one to think intensively and to think critically. Intelligence plus character - that is the goal of true education.</q></p>
                        </div>
                    </div>
                </div>
            </section><br>

            <!-- Contact Us -->
            <section class="testimonials text-center bg-light">
                <h1>Contact details</h1><br>
                <div class="container">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="testimonial-item mx-auto mb-5 mb-lg-0" align="left">

                                <b>Francisco de Vega</b>
                                <p class="font-weight-light mb-0">
                                    Room: R112<br/>
                                    Location: North Campus<br/>
                                    Tel: +27 41 504 3241<br/>
                                    Email: Francisco.deVega@mandela.ac.za<br/>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="testimonial-item mx-auto mb-5 mb-lg-0" align="left">
                                <b>Ronelle Plaatjes</b>
                                <p class="font-weight-light mb-0">
                                    Room: R113<br/>
                                    Location: North Campus<br/>
                                    Tel: +27 41 504 9055<br/>
                                    Email: Ronelle.plaatjes@mandela.ac.za<br/>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="testimonial-item mx-auto mb-5 mb-lg-0" align="left">
                                <b>Selwyn Milborrow</b>
                                <p class="font-weight-light mb-0">
                                    Room: R115<br/>
                                    Location: North Campus<br/>
                                    Tel: +27 41 504 9976<br/>
                                    Email: selwyn.milborrow@mandela.ac.za<br/>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </div>
    <!--    ///popup-->
    <div id="popup">
        <!-- This button will close the popup on website-->
        <button class="btn" style="color: #FEC000;float: right;background-color: #103A5C" id="close" data-dismiss="modal"><i class="fa fa-times" style="color:red"></i> Close</button><br><br>

        <p align="center" style="color:#FEC000; font-size: 18px; background-color:#103A5C">Welcome to E-WAYS</p>
        <!-- and here comes the image -->
        <?php
        $ThatTime1 ="15:00:10";
        $ThatTime2 ="16:00:00";
        $ThatTime3 ="18:00:10";
        $time = time();
        ?>
        <img class="responsive" src="<?php echo base_url() ?>assets/images/nugets/GRIT.jpg" alt="popup">
 </div>
</div>
</body>

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
<!-- ./Footer -->
<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
