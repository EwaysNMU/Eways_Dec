<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/course_detail.css">
<br>
<h2 style="text-align:center">Tips For Exams and Tests</h2>
<div class="container">
  <div class="mySlides">
    <div style="color: black" class="numbertext">1 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide1.jpg" style="width:100%;">
  </div>

  <div class="mySlides">
    <div style="color: black" class="numbertext">2 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div style="color: black" class="numbertext">3 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div style="color: black" class="numbertext">4 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div style="color: black" class="numbertext">5 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide5.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div style="color: black" class="numbertext">6 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide6.jpg" style="width:100%">
  </div>
    <div class="mySlides">
    <div style="color: black" class="numbertext">7 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide7.jpg" style="width:100%">
  </div>
    <div class="mySlides">
    <div style="color: black" class="numbertext">8 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide8.jpg" style="width:100%">
  </div>
    <div class="mySlides">
    <div style="color: black" class="numbertext">9 / 9</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/slide9.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
  <br>
</div>
<br>
<div class="wrapper">
    <div class="timer-container" id="#run-the-timer">
This button will be enabled in <span class="minute">10</span>:<span class="second">00</span>&nbsp;&nbsp;&nbsp;<input title="button will be enable soon" id="mybutton" disabled type="button" onclick="location.href='<?php echo site_url() ?>/tips_for_exams_and_tests_feedback_'" target="_blank" value=" Finish "/>
</div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">&nbsp;<i style="color:black"class="fa fa-angle-double-up"></i>&nbsp;</button>
<br>
<div class="container " style="max-width: 800px; min-width: 200px; margin: auto;">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle"  data-toggle="collapse" data-parent="toggle" href="#collapseOne">
                            <i class="fa fa-pencil-square-o"></i> Topic study note
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse in">
                        <div class="accordion-inner"><br>
                            <div id="value" style="color: #4CAF50"></div>
                            <form name="submit">
                                <textarea id="description" name="description" name="textarea" style="margin-bottom: 10px; resize: none;color:black;" rows="4" cols="50" class="jqte-test form-control" placeholder="enter your chat" autofocus></textarea>

                                <input style="margin-top: 5px" name="submit" value="save" type="submit" class="btn-submit pull-right submit btn-info">
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div><br>
<div align="center">
    <i>"Develop a passion for learning. If you do, you will never cease to grow".
    </i><br>
    - <b>Anthony J. D'Angelo</b>
</div>
<!--Start script for button timer-->
<script type="text/javascript"  src="<?php echo base_url() ?>/assets/js/button_timeout_enable.js"></script>
<script>
   function enable()
{
var x = document.getElementById("mybutton");

x.removeAttribute("disabled");
}

setTimeout("enable()", 6000);
    </script>
<script type="text/javascript"  src="<?php echo base_url() ?>/assets/js/course_content_slider.js"></script>
<script type="text/javascript"  src="<?php echo base_url() ?>/assets/js/back_to_top.js"></script>
