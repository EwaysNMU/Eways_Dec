<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon/favicon.ico" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <title>Reset Password</title>
        <style>
            body{
                padding-top: 100px;
                padding-bottom: 100px;
            }
        </style>
       <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>

 <style>
    #form label{float:left; width:140px;}
    #error_msg{color:red; font-weight:bold;}
 </style>

 <script>
    $(document).ready(function(){
        var $submitBtn = $("#form input[type='submit']");
        var $passwordBox = $("#password");
        var $confirmBox = $("#confirm_password");
        var $errorMsg =  $('<span id="error_msg">Passwords do not match.</span>');

        // This is incase the user hits refresh - some browsers will maintain the disabled state of the button.
        $submitBtn.removeAttr("disabled");

        function checkMatchingPasswords(){
            if($confirmBox.val() !== "" && $passwordBox.val !== ""){
                if( $confirmBox.val() !== $passwordBox.val() ){
                    $submitBtn.attr("disabled", "disabled");
                    $errorMsg.insertAfter($confirmBox);
                }
            }
        }

        function resetPasswordError(){
            $submitBtn.removeAttr("disabled");
            var $errorCont = $("#error_msg");
            if($errorCont.length > 0){
                $errorCont.remove();
            }  
        }


        $("#confirm_password, #password")
             .on("keydown", function(e){
                /* only check when the tab or enter keys are pressed
                 * to prevent the method from being called needlessly  */
                if(e.keyCode === 13 || e.keyCode === 9) {
                    checkMatchingPasswords();
                }
             })
             .on("blur", function(){                    
                // also check when the element looses focus (clicks somewhere else)
                checkMatchingPasswords();
            })
            .on("focus", function(){
                // reset the error message when they go to make a change
                resetPasswordError();
            });

    });
  </script>
    </head>
    <body>


        <div class="col-md-6 offset-md-3">
            <span class="anchor" id="formResetPassword"></span>
            <!-- form card reset password -->
            <div class="card card-outline-secondary">
                <div class="card-header">
                    <h3 class="mb-0">Password Reset</h3>
                </div>
                <div class="card-body">
                    <form id="form" action="<?php echo site_url() ?>/password_reset"  method="post" class="form" role="form" autocomplete="off">
                        <div class="form-group">
                            <input oncontextmenu="return false" hidden type="number" readonly class="form-control" value="<?php echo $seg1; ?>" name="studentno">

                        </div>
                        <div class="form-group">
                            <label for="inputResetPasswordEmail">New Password</label>
                            <input type="password" class="form-control" id="password" name="password"  onkeyup='check();'>
                            <?php echo form_error('password'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inputResetPasswordEmail">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password"  onkeyup='check();'>
                            <?php echo form_error('confirm_password'); ?>
                            <span id='message'></span>
                        </div>
                        <input hidden type="text" name="reset_token" id="reset_token" value="<?php echo $seg2; ?>"required><br>
                        <div class="form-group">
<!--                            <button type="submit" class="btn btn-success btn-lg float-right">Reset</button>-->
                            <input type="submit" name="submit" class="btn btn-success btn-lg float-right"  value="Reset"  />
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form card reset password -->

        </div>
    </body>
</html>










