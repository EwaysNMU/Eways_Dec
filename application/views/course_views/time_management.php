<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/course_detail.css">
<br>
<h2 style="text-align:center">Time Management</h2>
<div class="container">
    <div class="mySlides">
        <div style="color: black" class="numbertext">1 / 10</div>
        <img src="<?php echo base_url() ?>assets/images/topics/school_logo.png" style="width:100%">
    </div>
  <div class="mySlides">
    <div style="color: black" class="numbertext">2 / 10</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/1.jpg" style="width:100%;">
  </div>

  <div class="mySlides">
    <div style="color: black" class="numbertext">3 / 10</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div style="color: black" class="numbertext">4 / 10</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div style="color: black" class="numbertext">5 / 10</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div style="color: black" class="numbertext">6 / 10</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/5.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div style="color: black" class="numbertext">7 / 10</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/6.jpg" style="width:100%">
  </div>
    <div class="mySlides">
    <div style="color: black" class="numbertext">8 / 10</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/7.jpg" style="width:100%">
  </div>
    <div class="mySlides">
    <div style="color: black" class="numbertext">9 / 10</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/8.jpg" style="width:100%">
  </div>
    <div class="mySlides">
    <div style="color: black" class="numbertext">10 / 10</div>
    <img src="<?php echo base_url() ?>assets/images/topics/time_management/9.jpg" style="width:100%">
  </div>
  <br>
</div>
<br>
<div class="wrapper">
    <a onclick="plusSlides(-1)" style="cursor:pointer; color: green"><i class="fa fa-backward" aria-hidden="true"></i> Previous</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a onclick="plusSlides(1)" style="cursor:pointer;color: green">Next <i class="fa fa-forward" aria-hidden="true"></i></a>
    <div class="timer-container" id="#run-the-timer">
This button will be enabled in <span class="minute">10</span>:<span class="second">00</span>&nbsp;&nbsp;&nbsp;<input title="button will be enable soon" id="mybutton" disabled type="button" onclick="location.href='<?php echo site_url() ?>/time_management/video'"  value=" Next "/>
</div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">&nbsp;<i id="direct_up" style="color:black"class="fa fa-angle-double-up"></i>&nbsp;</button>
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
                                <input hidden name="topicID" id="topicID" type="number" value="2">
                                <?php foreach ($notes->result() as $note) { ?> 
                                <textarea id="description" name="description" name="textarea" style="margin-bottom: 10px;color:black;" rows="5" cols="50" class="form-control" placeholder="enter your note" autofocus><?php echo $note->description ?></textarea>   
                                <?php } ?>
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
    <i><q>Don’t be fooled by the calendar. There are only as many days in the year as you make use of.<br> One man gets only a week’s value out of a year while another man gets a full year’s value out of a week</q>.
    </i><br>
    - <b>Charles Richards</b>
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
