 <script>
setInterval(  
function()  
{  
$('#convo').load('<?php echo site_url("/chat/conversation/".$meg1) ?>');
}, 3000);
</script>
<?php if($get_chat->result()!= NULL):?>
<?php foreach ($get_chat->result() as $chat) { ?>
    <?php foreach ($student->result() as $value) { ?>

        <?php if ($value->studentID == $chat->studentID): ?>
            <div style="background-color:#e5dece;border-radius: 1%;padding-left: 20px;padding-top: 2px; padding-bottom: 2px;min-height: 50px">
                <p style="white-space: pre-wrap; padding: 0; margin: 0"><?php echo $chat->comment; ?></p>
              <i><small>Author: <?php echo $value->firstName . " " . $value->lastName ?></small></i>
                <small style="margin-left: 30px" class="badge-light"><?php
                    $d_t = new DateTime($chat->date_time);
                    echo DATE_FORMAT($d_t, 'd-M-Y') . DATE_FORMAT($d_t, ' @g:i A');
                    ?></small>
            </div><br>


        <?php endif ?>
    <?php } ?>
<?php } ?>
<?php else:?>
            <br><br><br>
                <p align="center">There is no comment to display</p>   
<?php endif; 


