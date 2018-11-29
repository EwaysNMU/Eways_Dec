<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/course_detail.css">
<br>
<h2 style="text-align:center">Study Strategies</h2>
<div class="container">
    <div class="mySlides">
        <div style="color: black" class="numbertext">1 / 11</div>
        <img src="<?php echo base_url() ?>assets/images/topics/school_logo.png" style="width:100%">
    </div>
  <div class="mySlides">
    <div style="color: black" class="numbertext">2 / 11</div>
    <img src="<?php echo base_url() ?>assets/images/topics/study_strategies/1.jpg" style="width:100%;">
  </div>

  <div class="mySlides">
    <div style="color: black" class="numbertext">3 / 11</div>
    <img src="<?php echo base_url() ?>assets/images/topics/study_strategies/2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div style="color: black" class="numbertext">4 / 11</div>
    <img src="<?php echo base_url() ?>assets/images/topics/study_strategies/3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div style="color: black" class="numbertext">5 / 11</div>
    <img src="<?php echo base_url() ?>assets/images/topics/study_strategies/4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div style="color: black" class="numbertext">6 / 11</div>
    <img src="<?php echo base_url() ?>assets/images/topics/study_strategies/5.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div style="color: black" class="numbertext">7 / 11</div>
    <img src="<?php echo base_url() ?>assets/images/topics/study_strategies/6.jpg" style="width:100%">
  </div>
    <div class="mySlides">
    <div style="color: black" class="numbertext">8 / 11</div>
    <img src="<?php echo base_url() ?>assets/images/topics/study_strategies/7.jpg" style="width:100%">
  </div>
    <div class="mySlides">
    <div style="color: black" class="numbertext">9 / 11</div>
    <img src="<?php echo base_url() ?>assets/images/topics/study_strategies/8.jpg" style="width:100%">
  </div>
    <div class="mySlides">
    <div style="color: black" class="numbertext">10 / 11</div>
    <img src="<?php echo base_url() ?>assets/images/topics/study_strategies/9.jpg" style="width:100%">
  </div>
    <div class="mySlides">
    <div style="color: black" class="numbertext">11 / 11</div>
    <img src="<?php echo base_url() ?>assets/images/topics/study_strategies/10.jpg" style="width:100%">
  </div>
  <br>
</div>
<br>
<div class="wrapper">
    <a onclick="plusSlides(-1)" style="cursor:pointer; color: green"><i class="fa fa-backward" aria-hidden="true"></i> Previous</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a onclick="plusSlides(1)" style="cursor:pointer;color: green">Next <i class="fa fa-forward" aria-hidden="true"></i></a>
    <div class="timer-container" id="#run-the-timer">
This button will be enabled in <span class="minute">10</span>:<span class="second">00</span>&nbsp;&nbsp;&nbsp;<input title="button will be enable soon" id="mybutton" disabled type="button" onclick="location.href='<?php echo site_url() ?>/study_strategies/video/1'" value=" Next "/>
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
                                     <input hidden name="topicID" id="topicID" type="number" value="3">
                                <?php if(empty($notes->result())): ?>
                                <textarea id="description" name="description" name="textarea" style="margin-bottom: 10px; resize: none;color:black;" rows="4" cols="50" class="jqte-test form-control" placeholder="enter your chat" autofocus></textarea>
                                <?php else: ?>
                                <?php foreach ($notes->result() as $note) { ?> 
                                <textarea id="description" name="description" name="textarea" style="margin-bottom: 10px; resize: none;color:black;" rows="4" cols="50" class="jqte-test form-control" placeholder="enter your chat" autofocus><?php echo $note->description ?></textarea>
                                    
                                <?php } ?>
                                <?php endif ?>
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
    <i>
        <q>You cannot be everything to everyone. If you decide to go north, you cannot go south at the same time.</q>
    </i><br>
    - <b>Jeroen De Flander</b>
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
