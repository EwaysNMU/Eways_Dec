<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/course_detail.css">
<br><br><br>
<h2 style="text-align:center">Making Better Presentations</h2>
<div class="container">
    <div class="mySlides">
        <div style="color: black" class="numbertext">1 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/school_logo.png" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">2 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/presentations/1.jpg" style="width:100%;">
    </div>

    <div class="mySlides">
        <div style="color: black" class="numbertext">3 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/presentations/2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div style="color: black" class="numbertext">4 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/presentations/3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div style="color: black" class="numbertext">5 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/presentations/4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div style="color: black" class="numbertext">6 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/presentations/5.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div style="color: black" class="numbertext">7 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/presentations/6.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">8 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/presentations/7.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">9 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/presentations/8.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">10 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/presentations/9.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">11 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/presentations/10.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">12 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/presentations/11.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">13 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/presentations/12.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">14 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/presentations/13.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div style="color: black" class="numbertext">15 / 15</div>
        <img src="<?php echo base_url() ?>assets/images/topics/presentations/14.jpg" style="width:100%">
    </div>
    <br>
</div>
<br>
<div class="wrapper">
    <a onclick="plusSlides(-1)" style="cursor:pointer; color: green"><i class="fa fa-backward" aria-hidden="true"></i> Previous</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a onclick="plusSlides(1)" style="cursor:pointer;color: green">Next <i class="fa fa-forward" aria-hidden="true"></i></a>
    <div class="timer-container" id="#run-the-timer">
        This button will be enabled in <span class="minute">10</span>:<span class="second">00</span>&nbsp;&nbsp;&nbsp;<input title="button will be enable soon" id="mybutton" disabled type="button" onclick="location.href = '<?php echo site_url() ?>/presentations/video'" value=" Next "/>
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
                                <input hidden name="topicID" id="topicID" type="number" value="8">
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
    <i>
        <q>If you have an important point to make, don’t try to be subtle or clever. Use a pile driver. Hit the point once. <br>Then come back and hit it again. Then hit it a third time – a tremendous whack.</q>
    </i><br>
    - <b>Winston Churchill</b>
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
<script src="<?php echo base_url() ?>assets/js/success_message.js"></script>
