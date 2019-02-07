<br><br><br>

    <div class="container-login100" style="background-image: url('<?php echo base_url() ?>assets/images/background.jpg');">
       
        <div class="container">
            <div class="row my-4">
                <div class="col-lg-8">  
                    <br>
                    <img class="img-fluid rounded" src="<?php echo base_url() ?>assets/images/home/e<?php echo mt_rand(1, 5); ?>.jpg" alt="e-learning pictures">
                </div>

                <div class="col-lg-4"><br>
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
        $cur_date = date('y-m-d');
        $date1 = "2019-01-11";
        ?>
        <img class="responsive" src="<?php echo base_url() ?>assets/images/nugets/Brené Brown.jpg" alt="popup">
    </div>
</div>
</body>


