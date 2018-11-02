
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url() ?>/admin_home">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?php echo site_url() ?>/admin_charts">Charts</a>
            </li>
            <li class="breadcrumb-item active">Question 1</li>
        </ol>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-bar-chart"></i> Feedback Question 1 </div>
            <div class="card-body">
                <div style="text-align: center">
                    <form class="" action="<?php echo site_url() ?>/admin_charts_q1" method="POST">
                        <select name="stopic">
                            <?php foreach ($topics->result() as $value) { ?>
                                <option value="<?php echo $value->topicID ?>"><?php echo $value->title ?></option>
                            <?php } ?>    
                        </select>

                        Student No: <input type="text" id="sname" pattern="[0-9]{9}" placeholder="e.g 212345678" name="sname" minlength="9" maxlength="9" value="<?php if (isset($_POST['sname'])) echo $_POST['sname']; ?>" required autofocus>

                        From: <input type="date" id="sdate" name="startDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['startDate'])) echo $_POST['startDate']; ?>">

                        To: <input type="date" id="sdate" name="endDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['endDate'])) echo $_POST['endDate']; ?>"><br><br>

                        <input id="postBtn" type="submit" value="Search"><br><br>

                        <?php echo form_error('endDate'); ?>
                    </form>
                    
                    <?php foreach ($yes->result() as $value) { ?>
                        <?php echo $value->firstName ?> <?php echo $value->lastName ?>, <?php echo $value->title ?>
                    <?php } ?>
                        
                </div>
                <canvas id="myChart" width="100%" height="40%"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var chart = new Chart(ctx, {
                    type: 'pie',
                            data: {
                            labels: ["Yes", "No", "Somehow"],
                                    datasets: [{
                                    label: "Was this topic helpful?",
                                            //borderColor: 'rgb(255, 255, 255)',
                                            data: [
<?php foreach ($yes->result() as $value) { ?>
    <?php echo $value->countYes ?>,
<?php } ?>
<?php foreach ($no->result() as $value) { ?>
    <?php echo $value->countNo ?>,
<?php } ?>
<?php foreach ($somehow->result() as $value) { ?>
    <?php echo $value->countSomehow ?>
<?php } ?>],
                                            backgroundColor: [
                                                    "rgba(50,150,300,0.5)",
                                                    "rgba(200,0,200,0.5)",
                                                    "rgba(300,150,50,0.5)"
                                            ],
                                            borderColor: [
                                                    "rgba(50,150,300,1)",
                                                    "rgba(200,0,200,1)",
                                                    "rgba(300,150,50,1)"
                                            ],
                                            borderWidth: 1
                                    }]
                            },
                            // Configuration options go here
                            options: {maxBarThickness: .2}
                    });
                </script>
            </div>
        </div></div>
</div></div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->