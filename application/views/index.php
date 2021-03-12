<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Starbhak Laundry</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sb-admin-2.min.css') ?>">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/dff8e24a70.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			  $(".wrapper").toggleClass("active")
			})
		});
	</script>
</head>
<body>

<div class="wrapper">

	<div class="top_navbar fixed-top">
		<div class="logo">
			<a href="#">Starbhak Laundry</a>
		</div>
		<div class="top_menu">
			<div class="home_link"></div>
			<div class="right_info">
				<div class="">
					<div class="" style="padding:0px">					
					</div>
				</div>
				<a href="<?php echo site_url('sistem/logout'); ?>" style="text-decoration: none;color:white">
				<div class="icon_wrap bg-danger">
					<div class="icon">
						<i class="fas fa-sign-out-alt"></i>
					</div>
				</div>
				</a>
			</div>
		</div>
	</div>

	<div class="main_body">
		
		<div class="sidebar_menu">
	        <div class="inner__sidebar_menu">
	        	
	        	<ul>
		          <li>
		            <a href="<?php echo site_url('sistem/index/home'); ?>">
		              <span class="icon">
		              	<i class="fas fa-border-all"></i></span>
		              <span class="list">Home</span>
		            </a>
		          </li>
		          <li>
		            <a href="<?php echo site_url('sistem/index/data_karyawan'); ?>">
		              <span class="icon"><i class="far fa-address-card"></i></span>
		              <span class="list">Employe</span>
		            </a>
		          </li>
		          <li>
		            <a href="<?php echo site_url('sistem/index/member1'); ?>">
		              <span class="icon"><i class="fas fa-address-book"></i></span>
		              <span class="list">Member</span>
		            </a>
		          </li>
		          <li>
		            <a href="<?php echo site_url('sistem/index/outlet'); ?>">
		              <span class="icon"><i class="far fa-building"></i></span>
		              <span class="list">Outlet</span>
		            </a>
		          </li>
		          <li>
				  <a href="<?php echo site_url('sistem/index/paket'); ?>">
		              <span class="icon"><i class="fas fa-box-open"></i></span>
		              <span class="list">Package</span>
		            </a>
		          </li>		          
				  <li>
		            <a href="<?php echo site_url('sistem/index/transaksi'); ?>">
		              <span class="icon"><i class="fas fa-money-check-alt"></i></span>
		              <span class="list">Transaction</span>
		            </a>
		          </li>
				  <!-- <li>
		            <a href="<?php echo site_url('sistem/index/report'); ?>">
		              <span class="icon"><i class="fas fa-file-archive"></i></span>
		              <span class="list">Report</span>
		            </a>
		          </li> -->
		        </ul>

		        <div class="hamburger">
			        <div class="inner_hamburger">
			            <span class="arrow">
			                <i class="fas fa-long-arrow-alt-left"></i>
			                <i class="fas fa-long-arrow-alt-right"></i>
			            </span>
			        </div>
			    </div>
	        </div>
	    </div>

	    <div class="container " >
            <div class="row">
				<div class="col-12">
					<?php
					if ($this->uri->segment(3) == "home") {
						$this->load->view('home');
						}
					?>
				<!-- <div class="item_wrap" >
	    		<div class="item"> -->
       <?php 
        
        if ($this->uri->segment(3) == "data_karyawan") {
            $this->load->view('data_karyawan');
            
          }
        elseif ($this->uri->segment(3) == "member1") {
            $this->load->view('member1');
            
          }
        elseif ($this->uri->segment(3) == "outlet") {
            $this->load->view('outlet');
            
		  }
		  elseif ($this->uri->segment(3) == "paket") {
            $this->load->view('paket');
            
		  }
		  elseif ($this->uri->segment(3) == "report") {
            $this->load->view('report');
            
		  }
		  elseif ($this->uri->segment(3) == "transaksi") {
            $this->load->view('transaksi');
            
          }
		  elseif ($this->uri->segment(3) == "transaksi_day") {
            $this->load->view('transaksi_day');
			
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
		?>
		</div>
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

<script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
</script>

</html>