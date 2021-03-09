<main role="main" class="container-fluid">
	<style>
		.menu_card:hover {
			background: linear-gradient(to right, white, whitesmoke);
		}

	</style>
	<title>home</title>
	<div class="row">
		<div class="col-sm-offset-2 col-sm-2 "></div>
		<div class="col-12 mb-3">
			<div class="card mb-0 shadow" style="max-width:100%;height:100%">
				<div class="row no-gutters">
					<div class="col-md-4">
						<center> <img src="<?php echo base_url().'assets/'.$this->session->userdata('gambar'); ?>" class="card-img"
								style="width:250px;padding:5px;border-radius:10px;margin:3%" class="card-img" alt="..."></center>
					</div>
					<div class="col-8 mt-4">
						<div class="card-body mt-0">
							<center>
								<!-- DI ISI NAMA PEGAWAI YANG LOGIN -->
								<h2 class="card-title"><?php echo $this->session->userdata('usernama'); ?></h2>
								<p class="card-text">Status : <?php echo $this->session->userdata('stat'); ?></p>
								<p class="card-text">Outlet : <?php echo $this->session->userdata('out'); ?></p>
								<p class="card-text"><small class="text-muted">Login Succes</small></p>
							</center>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-offset-2 col-sm-2"></div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2 menu_card">
				<a href="<?php echo site_url('sistem/index/data_karyawan'); ?>" style="text-decoration:none;">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<center>
									<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">User</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $c_user;?></div>
								</center>
							</div>
							<div class="col-auto">
								<i class="fas fa-user fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2 menu_card ">
				<a href="<?php echo site_url('sistem/index/member1'); ?>" style="text-decoration:none;">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<center>
									<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Members</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $c_member;?></div>
								</center>
							</div>
							<div class="col-auto">
								<i class="fas fa-users fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
			</div>
			</a>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100 py-2 menu_card">
				<a href="<?php echo site_url('sistem/index/outlet'); ?>" style="text-decoration:none;">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<center>
									<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Outlet</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $c_outlet;?></div>
								</center>
							</div>
							<div class="col-auto">
								<i class="fas fa-store fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2 menu_card">
				<a href="<?php echo site_url('sistem/index/transaksi_day'); ?>" style="text-decoration:none;">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<center>
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Transaksi (DAY)</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_transaksi_harian;?></div>
								</center>
							</div>
							<div class="col-auto">
								<i class="fas fa-money-check-alt fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</main>
