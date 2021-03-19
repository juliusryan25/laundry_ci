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
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
					if ($this->uri->segment(3) == "homeowner") {
						$this->load->view('home/homeowner');
					}
					else if($this->uri->segment(3) == "transaksi_day_owner") {
						$this->load->view('transaksi/transaksi_day_owner');
					}
					else if ($this->uri->segment(3) == "outlet_owner") {
						$this->load->view('outlet/outlet_owner');
						
					}
					else if ($this->uri->segment(3) == "member_owner") {
						$this->load->view('member/member_owner');
						
					}
					else if ($this->uri->segment(3) == "transaksi_outlet") {
						$this->load->view('transaksi/transaksi_outlet');
						
					}
					?>
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
