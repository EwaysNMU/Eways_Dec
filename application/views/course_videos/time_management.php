<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/course_detail.css">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/course_videos.css">
<br>
<h2 style="text-align:center">Time Management</h2>
<div class="container">
    <div id="file" class="form-group resp-container">
        <iframe  class="resp-iframe" src="https://drive.google.com/file/d/1TCrktM7u1WUJl8ky5m20Ki2i9KPFZRJU/preview" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<br>
<div class="wrapper">
    <div class="timer-container" id="#run-the-timer">
        This button will be enabled in <span class="minute">02</span>:<span class="second">57</span>&nbsp;&nbsp;&nbsp;<input title="button will be enable soon" id="mybutton" disabled type="button" onclick="location.href = '<?php echo site_url() ?>/time_management_feedback_'" target="_blank" value=" Finish "/>
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
                                <input hidden name="topicID" id="topicID" type="number" value="2">
                                <?php if (empty($notes->result())): ?>
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

    setTimeout("enable()", 180000);
</script>
<script type="text/javascript"  src="<?php echo base_url() ?>/assets/js/back_to_top.js"></script>
