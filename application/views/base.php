<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/dff8e24a70.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>


   
<body>
    <!-- As a heading -->
<nav class="navbar  fixed-top" style="background-image:url(<?php echo base_url();?>assets/image/nav3.jpg);font-family: 'Lemonada', cursive;color:black" >
  <span class="navbar-brand mb-0 h1" style="font-size:30px" >Starbhak Laundry</span>
  </a>
                   <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link  " style="color: white;"  href="<?php echo site_url('sistem/base/home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                     <b> <a class="nav-link  " style="color: white;"  href="<?php echo site_url('sistem/base/data_karyawan'); ?>">Data Karyawan</a></b>
                    </li> 
                    <li class="nav-item">
                      <b><a class="nav-link" style="color: white;" href="<?php echo site_url('sistem/base/member'); ?>">Member</a></b>
                    </li>
                    <li class="nav-item">
                      <b><a class="nav-link" style="color: white;" href="<?php echo site_url('sistem/base/paket'); ?>">Paket</a></b>
                    </li>
                    <li class="nav-item">
                      <b><a class="nav-link" style="color: white;" href="<?php echo site_url('sistem/base/outlet'); ?>">Outlet</a></b>
                    </li>
                    <li class="nav-item">
                      <b><a class="nav-link" style="color: white;" href="">Laporan</a></b>
                    </li>
                  </ul>
</nav>




<?php
    if ($this->uri->segment(3) == "") {
        $this->load->view('login');
    }
    elseif ($this->uri->segment(3) == "home") {
      $this->load->view('home');
    }
    elseif ($this->uri->segment(3) == "data_karyawan") {
      $this->load->view('data_karyawan');
      
    }
    elseif ($this->uri->segment(3) == "member") {
      $this->load->view('member');
      
    }
    elseif ($this->uri->segment(3) == "paket") {
      $this->load->view('paket');
      
    }
    elseif ($this->uri->segment(3) == "outlet") {
      $this->load->view('outlet');
      
    }
    else if ($this->uri->segment(2) == "edit_data_member") {
      $this->load->view('edit_member');
      
    }
    else if ($this->uri->segment(2) == "edit_data_user") {
      $this->load->view('edit_datakaryawan');
      
    }
    else if ($this->uri->segment(2) == "edit_outlet") {
      $this->load->view('edit_outlet');
      
    }
    else if ($this->uri->segment(2) == "edit_paket") {
      $this->load->view('edit_paket');
      
    }
    else if ($this->uri->segment(2) == "preview_data_user") {
      $this->load->view('pdf_datauser_priview');
      
    }
    else if ($this->uri->segment(2) == "cetak_pdf") {
      $this->load->view('pdf_datauser_priview');
      
    }
    else if ($this->uri->segment(2) == "index") {
      $this->load->view('index');
      
    }

?>

</body>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/Jquery/jquery.js' ?>"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>


</html>