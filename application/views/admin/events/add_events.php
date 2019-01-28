<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    function myFunction() {
        var status1 = $('input:radio[id=status1]:checked').val();
        var status2 = $('input:radio[id=status2]:checked').val();
        var status3 = $('input:radio[id=status3]:checked').val();
        if (status1) {
           jQuery("div#url_div").show(); 
           jQuery("div#file_div").hide();
        } else if(status2 || status3){
           jQuery("div#file_div").show();
           jQuery("div#url_div").hide(); 
        } 
//        else if(status3)
//        {
//           jQuery("div#file_div").show(); 
//           jQuery("div#url_div").hide(); 
//        }
    }
</script>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url() ?>/admin_home">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="<?php echo site_url() ?>/admin/resources">Resources</a>
            </li>
            <li class="breadcrumb-item active">Add Resources</li>
        </ol>
        <p style="color:#EDAD2A" align="center">
            <?php if ($this->session->flashdata('flash_error')): ?>
                <?php echo $this->session->flashdata('flash_error') ?>
            <?php endif ?>
        </p>
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-briefcase"></i> Add Resources</div>
                                    <div class="card-body">
                                        <form method="post" action="<?php echo site_url() ?>/admin/add_resources" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="title"><b>Title:</b></label>
                                                <input type="text" required class="form-control" name="title">
                                                <?php echo form_error('title'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="resources"><b>Type of resources:</b></label><br>
<!--                                                <select id="type" required class="form-control" name="type" onchange="showHide(this)">
                                                    <option selected value="">--Select--</option>
                                                    <option value="PDF">PDF</option>
                                                    <option value="Web Address">Web Address</option>
                                                    <option value="Photo">Photo</option>
                                                </select>-->
                                                
                                            <label>
                                                <input onclick="myFunction()" class="form-control" type="radio" id="status1" name="type" value="Web Address" checked="true"> Web Address&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                            <label>
                                                <input onclick="myFunction()" class="form-control" type="radio" id="status2" name="type" value="PDF"> PDF&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                            <label>
                                                <input onclick="myFunction()" class="form-control" type="radio" id="status3" name="type" value="Photo"> Photo
                                            </label>
                                                <?php echo form_error('type'); ?>
                                            </div>
                                            <div style="display: none" id="file_div" class="form-group type">
                                                <label id="file_label" for="file"><b>File:</b></label>
                                                <input id="pdf_photo" accept=".jpeg, .jpg, .jpe, .jfif, .jif,.png,.pdf,image/*" type="file" class="form-control" name="file">
                                                <?php echo form_error('file'); ?>
                                            </div>
                                            <div id="url_div" class="form-group type">
                                                <label  for="web_url"><b>Web Address:</b></label>
                                                <input id="web_url" type="url" placeholder="e.g. http://www.google.com" pattern="https?://.+" title="Include http://" class="form-control" name="web_url">
                                                <?php echo form_error('web_url'); ?>
                                            </div>
                                            <button name="upload" type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                        <!-- /.row-->
                    </div>
                </div><br><br>
            </div>
        </div>
    </div>
</div>


















































































