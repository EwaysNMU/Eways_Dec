<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/course_list_home.css">
<body style="background-color: #F5F5F5">
<br><br><br><br>
<?php if ($this->session->flashdata('flash_Success')): ?>
    <script>
        swal({
            title: "Success!",
            text: "Your feedback was submitted",
            icon: "success"
        });
    </script>
<?php endif ?>
<div class="container">
    <div align="center">
        <h2>LIST OF COURSES</h2>
    </div>
    <br><br>

    <div class="row">
        <div class="col s12 m4">
            <div id="card1" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/goals.png" width="256" height="216" alt="GOALS SETTING">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">GOAL SETTING</h6>
                    <p style="text-align: center" class="card-text">The definition of goal setting is the process of identifying something that you want to accomplish and establishing measurable goals and time frames.</p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn how to set achievable goals</h6>
                    <div class="text">
                        <a id="goal_btn" class="button" href="<?php echo site_url() ?>/goals_setting_">Start</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div id="card3" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/time management.jpg" width="256" height="216" alt="TIME MANAGEMENT">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">TIME MANAGEMENT</h6>
                    <p style="text-align: center" class="card-text">Time management is the process of organizing and planning how to divide your time between specific activities. Good time management enables you to work smarter.</p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn how to prioritize</h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "1"): ?>
                            <div class="text">
                                <a class="button" href="<?php echo site_url() ?>/time_management_">Start</a>
                            </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?> 
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div id="card2" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/strategy.jpg" width="256" height="216" alt="STRESS MANAGEMENT">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">STUDY STRATEGIES</h6>
                    <p style="text-align: center" class="card-text">Study strategy otherwise known as study skills refer to those things that individuals do when they have to locate, organize, and remember information.</p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn how to strategize </h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "2"): ?>
                            <div class="text">
                                <a class="button" href="<?php echo site_url() ?>/study_strategies_">Start</a>
                            </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?> 
                </div>
            </div>
        </div>

    </div><br><br>

    <div class="row">
    </div>
    <div class="row">
        <div class="col s12 m4">
            <div id="card4" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/concentrating.jpg" width="256" height="216" alt="CONCENTRATION & MEMORIZING">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">CONCENTRATION & MEMORIZING</h6>
                    <p style="text-align: center" class="card-text">If you are not focused, you won't be able to memorize new facts or recall information you memorized previously.  </p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn how to focus</h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "3"): ?>
                            <div class="text">
                                <a class="button" href="<?php echo site_url() ?>/concentration_">Start</a>
                            </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div id="card5" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/assignment_writing.jpg" width="256" height="216" alt="ASSIGNMENT WRITING">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">ACADEMIC WRITING</h6>
                    <p style="text-align: center" class="card-text">Academic writing can be both challenging and exciting. It involves several different processes such as research, planning, reflection etc.</p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn writing styles</h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "4"): ?>
                            <div class="text">
                                <a class="button" href="<?php echo site_url() ?>/assignment_writing_">Start</a>
                            </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div id="card6" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/refrencing.png" width="256" height="216" alt="REFERENCE CORRECTLY">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">REFERENCE CORRECTLY</h6>
                    <p style="text-align: center" class="card-text">It is important to reference the sources you use so that the reader can follow your arguments and check your sources.<br><br></p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn the importance of referencing</h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "5"): ?>
                            <div class="text">
                                <a class="button" href="<?php echo site_url() ?>/reference_correctly_">Start</a>
                            </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div><br><br>
    
    <div class="row">
        <div class="col s12 m4">
            <div id="card1" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/note_taking.jpg" width="256" height="216" alt="NOTE TAKING & SUMMARISING">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">NOTE TAKING & SUMMARISING</h6>
                    <p style="text-align: center" class="card-text"> Note-taking is the process of organizing and writing pieces of information. Summarizing involves analyzing information and identifying the essential elements.</p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn how to take notes</h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "6"): ?>
                    <div class="text">
                        <a class="button"  href="<?php echo site_url() ?>/notetaking_">Start</a>
                    </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div id="card3" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/presentation.jpg" width="256" height="216" alt="MAKING BETTER PRESENTATIONS">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">MAKING BETTER PRESENTATIONS</h6>
                    <p style="text-align: center" class="card-text">Presentation is a means of communication that can be adapted to various speaking situations, such as briefing a team.</p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn to be a good presenter</h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "7"): ?>
                            <div class="text">
                                <a class="button" href="<?php echo site_url() ?>/presentations_">Start</a>
                            </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?> 
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div id="card2" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/tips.png" width="256" height="216" alt="TIPS FOR EXAMS AND TESTS">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">TIPS FOR EXAMS AND TESTS</h6>
                    <p style="text-align: center" class="card-text">Give yourself the best environment to focus in by choosing somewhere with enough light, a comfortable chair, and little to no distractions.</p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn exam and test tips</h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "8"): ?>
                            <div class="text">
                                <a class="button" href="<?php echo site_url() ?>/tips_for_exams_">Start</a>
                            </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?> 
                </div>
            </div>
        </div>

    </div><br><br>
</div>
<br><br>
<button onclick="topFunction()" id="myBtn" title="Go to top">&nbsp;<i style="color:black"class="fa fa-angle-double-up"></i>&nbsp;</button>

<script type="text/javascript"  src="<?php echo base_url() ?>/assets/js/back_to_top.js"></script>
