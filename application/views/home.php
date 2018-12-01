  <body>
        
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark mandelacolor">
            <a class="navbar-brand" href="#">E-WAYS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() ?>"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul  class="navbar-nav">
                      <li class="nav-item">
                        <a id="navhover" class="nav-link" href="<?php echo site_url() ?>/event"><i class="fa fa-calendar"></i> Events</a>
                    </li>
                    <li class="nav-item">
                        <a id="navhover" class="nav-link" href="<?php echo site_url() ?>/student/login"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a id="navhover" class="nav-link" href="<?php echo site_url() ?>/student_register_form"> <i class="fa fa-user-plus"></i> Registration</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin/login">Admin</a>
                    </li>


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
                          <img class="rounded-circle img-fluid d-block mx-auto" style="height: 280px; width: 280px" src="<?php echo base_url() ?>assets/images/home/albert_Einstein.jpg" alt="Albert-Einstein">
                          <h4>Albert Einstein</h4>
                          <p><q>Life is like riding a bicycle. To keep your balance you must keep moving.</q></p>
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
                            Tel: +27 41 504 3207<br/>
                          Email: Francisco.deVega@mandela.ac.za<br/>
                        </p>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0" align="left">
                        <b>Ronelle Plaatjes</b>
                        <p class="font-weight-light mb-0">
                            Room: R107<br/>
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
                            Room: R226<br/>
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
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
