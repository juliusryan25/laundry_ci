<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="max-width: 100%; margin-top: 7%;margin-bottom: 7%;border-color: dodgerblue;border-radius:15px">
                    <div class="row no-gutters">
                      <div class="col-md-4" style="margin-top: 7%;">
                      <img src="<?php echo base_url(); ?>assets/image/lon.png" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8" style="background:linear-gradient(to right,white,dodgerblue);border-radius:14px">
                        <div class="card-body" style="margin: 14%;">
                          <center>
                          <h4 class="card-title" style="color: white;">Login</h4>

                          <form action="<?php echo site_url('sistem/aksi_login') ?>" method="post" enctype="multipart/form-data">
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text">Username</div>
                              </div>
                              <input type="text" name="user" class="form-control is-invalid" id="user" placeholder="">
                            </div>
                          </div>
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Password</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text" style="width: 97px; text-align: center;">Password</div>
                              </div>
                              <input type="password" name="pass" class="form-control is-invalid" id="pass" placeholder="">
                            </div>
                          </div>
                          <button type="submit" style="width: 93.5%;" class="btn btn-primary mb-2">Next</button>
                         </center>
                         </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/Jquery/jquery.js' ?>"></script>

<script>

$('#user').keyup(function () {
var user = $('#user').val();

if (user == "") {
    $('#user').addClass("is-invalid");
    $('#user').removeClass("is-valid");
}else{
    $('#user').addClass("is-valid");
    $('#user').removeClass("is-invalid");
}

});

$('#pass').keyup(function () {
var password = $('#pass').val();

if (password == "") {
    $('#pass').addClass("is-invalid");
    $('#pass').removeClass("is-valid");
}else{
    $('#pass').addClass("is-valid");
    $('#pass').removeClass("is-invalid");
}


});

</script>


</html>