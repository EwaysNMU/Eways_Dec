<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/course_detail.css">
<br>
<h2 style="text-align:center">Goal Setting</h2>
<div class="container">
    <div class="mySlides">
        <div style="color: black" class="numbertext">1 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide1.jpg" style="width:100%;">
    </div>

    <div class="mySlides">
        <div style="color: black" class="numbertext">2 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div style="color: black" class="numbertext">3 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div style="color: black" class="numbertext">4 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div style="color: black" class="numbertext">5 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide5.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div style="color: black" class="numbertext">6 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide6.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">7 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide7.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">8 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide8.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">9 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide9.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">10 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide10.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">11 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide11.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">12 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide12.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">13 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide13.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">14 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide14.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">15 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide15.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">16 / 16</div>
        <img src="<?php echo base_url() ?>assets/images/topics/goal_setting/slide16.jpg" style="width:100%">
    </div>


    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
    <br>
</div>
<br>
<div class="wrapper">
    <div class="timer-container" id="#run-the-timer">
        This button will be enabled in <span class="minute">10</span>:<span class="second">00</span>&nbsp;&nbsp;&nbsp;<input title="button will be enable soon" id="mybutton" disabled type="button" onclick="location.href = '<?php echo site_url() ?>/goals_setting_feedback_'" target="_blank" value=" Finish "/>
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
                                <input  name="topicID" id="topicID" type="number" value="1">
                                <?php foreach ($notes->result() as $note) { ?>
                                    <?php if ($note->topicID === "1"): ?> 
                                <textarea id="description" name="description" name="textarea" style="margin-bottom: 10px; resize: none;color:black;" rows="4" cols="50" class="jqte-test form-control" placeholder="enter your chat" autofocus><?php echo $note->description ?></textarea>
                                    <?php endif ?>
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
    <i>“If you want to be happy, set a goal that commands your thoughts, liberates your energy and inspires your hopes”.
    </i><br>
    - <b>Andrew Carnegie</b>
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
