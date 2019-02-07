<html>
    <head>
        <title>E-WAYS</title>  
        <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
        <style>
            .div-center {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                margin-top: 20%;
                margin-bottom: 5%;
                width:800px;
                height:1150px;
                text-align:center; 
                padding:20px;
                background-image: url("<?php echo base_url() ?>assets/images/favicon/cert2.png");
            }
            .div-content {
                width:750px; 
                height:1089px; 
                padding:30px; 
                text-align:center;
            }
            #navhover{ text-decoration: none;
                       color: #FEC000
            }
            body{
                background-color:grey
            }
            /*    @media print {
            
               @page {size: A4 portrait;
                      max-height:100%; 
                      max-width:100%;
               }
            }*/
            /*   @page {
                    size: A4;
                }*/

        </style>
    </head>
    <body>
        <br>
        <div style="margin-left:20%; margin-top: 30px">
            <a href="<?php echo site_url() ?>/all_courses" class="btn btn-info" role="button"><i class="fa fa-home"></i> Home</a>
            <button  class="btn btn-info" id="btnSave" role="button" download="certificate"><i class="fa fa-download"></i> Download</button>
            <a  class="btn btn-info" href="<?php echo site_url() ?>/All_Courses_controller/my_DOMPDF" id="btnSave" role="button" download="certificate">Download</a>
<!--            <button onclick="printDiv('print')" class="btn btn-info" id="cmd" role="button"><i class="fa fa-print"></i> Print</button>-->
        </div>
        <div id="print" class="div-center canvas">
            <!--    <div style="width:750px; height:1089px; padding:30px; text-align:center; border: 5px solid #787878">-->
            <div id="div-content">
                <br>
                <img style="height:250px; width:250px; margin-top: 50px" src="<?php echo base_url() ?>assets/images/favicon/favicon.jpg">
                <br><br><br><br>
                <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
                <br><br>
                <span style="font-size:25px"><i>This is to certify that</i></span>
                <br><br>
                <span style="font-size:30px">
                    <?php foreach ($info2->result() as $value) { ?>
                        <?php if ($value->studentID == $this->session->userdata('studentID')): ?>
                            <b><?php echo ucfirst($value->firstName . " " . $value->lastName); ?></b>
                        <?php endif ?>
                    <?php } ?>
                </span><br/><br/>
                <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
                <span style="font-size:30px">Academic Success Strategies (ASS)</span> <br/><br/>
         <!--       <span style="font-size:20px">with score of <b>$grade.getPoints()%</b></span> -->
                <br/><br/>
                <div style="float: left; margin-left: 200px">
                    <img style="height:50px; width:110px;" src="<?php echo base_url() ?>assets/images/favicon/signature.jpg"><br>
                    <span style="font-size:25px">Ronelle Plaatjes</span><br>
                    <b>(Co-ordinator)</b>
                </div>
                <div style="float: right; margin-right: 200px"><br><br>
                    <span style="font-size:25px"><i><?php echo date('d-M-Y') ?></i></span><br>
                    <b>(Date)</b>
                </div><br><br><br><br><br><br><br><br>
                <p style="font-size:15px"><b>Nelson Mandela University</b></p><br/>
            </div>
        </div><br><br><br><br>
        <div id="editor"></div>
        <canvas id='mapCanvas'></canvas>
        <script type="text/javascript">
            function printDiv(print) {
                var printContents = document.getElementById(print).innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
            }




        </script>
<!--        <script>
            $(function () {
                $("#btnSave").click(function () {
                    html2canvas($("#print"), {
                        onrendered: function (canvas) {
                            theCanvas = canvas;
                            document.body.appendChild(canvas);
                            mapCanvas.width = 800;   /// use integer values
                            mapCanvas.height = 1150;

                            // Convert and download as image 
                            Canvas2Image.saveAsPNG(canvas);
                $("#mapCanvas").append(canvas);
//                             Clean up 
                            document.body.removeChild(canvas);
                        }
                    });
                });
            });</script>-->
        <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.js"></script>
    </body>
</html>
