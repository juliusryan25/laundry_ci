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
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
	</script>
	<script>
		$(document).ready(function () {
			$(".hamburger").click(function () {
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
				<div class="home_link">
					<a style="text-decoration:none" href="<?php echo site_url('kasir/indexkasir/homekasir'); ?>">
						<span class="icon"><i class="fas fa-home"></i></span>
						<span>Home</span>
					</a>
				</div>
				<div class="right_info">
					<div class="">
						<div class="" style="padding:0px">
							<img src="<?php echo base_url().'assets/'.$this->session->userdata('gambar'); ?>"
								style="width:43px;border-radius:5px;" alt="...">
						</div>
					</div>
					<div class="icon_wrap bg-danger">
						<div class="icon">
							<a href="<?php echo site_url('sistem/logout'); ?>"
								style="text-decoration: none;color:white"><i class="fas fa-sign-out-alt"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="main_body">

			<div class="sidebar_menu">
				<div class="inner__sidebar_menu">

					<ul>
						<li>
							<a href="<?php echo site_url('owner/indexowner/homeowner'); ?>">
								<span class="icon">
									<i class="fas fa-border-all"></i></span>
								<span class="list">Home</span>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url('owner/indexowner/report'); ?>">
								<span class="icon"><i class="fas fa-file-archive"></i></span>
								<span class="list">Report</span>
							</a>
						</li>
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

			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php
					if ($this->uri->segment(3) == "homeowner") {
						$this->load->view('homeowner');
						}
					?>
						<!-- <div class="item_wrap" >
	    		<div class="item"> -->
						<?php                        
       		  
		  if ($this->uri->segment(3) == "report") {
            $this->load->view('report');
            
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
	$(document).ready(function () {
		$('#example').DataTable();
	});

</script>

</html>
