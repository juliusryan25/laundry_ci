<main role="main" class="container-fluid">
	<style>
		.menu_card:hover {
			background: linear-gradient(to right, white, whitesmoke);

		}

		.gambar_employee {
			width: 70%;
			height: 65px;
			border-radius: 90%;
			margin-left: 10%;
		}

		/* width */
		::-webkit-scrollbar {
		width: 5px;
		}

		/* Track */
		::-webkit-scrollbar-track {
		box-shadow: inset 0 0 5px grey; 
		border-radius: 10px;
		}
		
		/* Handle */
		::-webkit-scrollbar-thumb {
		background: #4E73DF; 
		border-radius: 10px;
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
		background: #b30000; 
		}

	</style>
	<title>home</title>
	<div class="row">
		<div class="col-sm-offset-2 col-sm-2 "></div>
		<div class="col-12 mb-3 mt-4">
			<div class="card mb-0 shadow" style="max-width:100%;height:100%;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<center> <img src="<?php echo base_url().'assets/'.$this->session->userdata('gambar'); ?>"
								class="card-img" style="width:250px;padding:5px;border-radius:10px;margin:3%"
								class="card-img" alt="..."></center>
					</div>
					<div class="col-8 mt-4">
						<a href="<?php echo site_url('sistem/logout'); ?>" style="text-decoration: none;color:white;">
							<div class="icon_wrap bg-danger shadow"
								style="float:right;width:45px;border-radius:20px 0px 0px 20px;height:40px;font-size:25px;padding-top:2px;padding-left:5px">
								<center>
									<div class="icon">
										<i class="fas fa-sign-out-alt"></i>
									</div>
								</center>
							</div>
						</a>
						<br>
						<div class="card-body mt-0">
							<center>
								<!-- DI ISI NAMA PEGAWAI YANG LOGIN -->
								<h2 class="card-title"><?php echo $this->session->userdata('usernama'); ?></h2>
								<p class="card-text">Status : <?php echo $this->session->userdata('stat'); ?></p>
								<p class="card-text">Outlet : <?php echo $this->session->userdata('out'); ?></p>
								<p class="card-text"><small class="text-success">Login Succes</small></p>
							</center>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-offset-2 col-sm-2"></div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2 menu_card ">
				<a href="<?php echo site_url('owner/indexowner/member_owner'); ?>" style="text-decoration:none;">
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
				<a href="<?php echo site_url('owner/indexowner/outlet_owner'); ?>" style="text-decoration:none;">
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
			<div class="card border-left-warning shadow h-100 py-2 menu_card">
				<a href="<?php echo site_url('owner/indexowner/transaksi_outlet'); ?>" style="text-decoration:none;">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<center>
									<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Transaksi
										(ALL)</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800">
										<?php echo $c_transaksi;?></div>
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
			<div class="card border-left-primary shadow h-100 py-2 menu_card">
				<a href="<?php echo site_url('owner/indexowner/transaksi_day_owner'); ?>" style="text-decoration:none;">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<center>
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Transaksi
										(DAY)</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800">
										<?php echo $total_transaksi_harian;?></div>
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
		<div class="col-xl-6 col-md-6 mb-4">
			<div class="card shadow h-100 py-2 ">
				<div class="col-12 shadow-sm mr-2">
					<div class="row mb-2">
						<div class="col-10">
							<h3>Employee</h3>
						</div>
						<div class="col-2">
							<a href="<?php echo site_url('owner/indexowner/homeowner'); ?>"
								style="text-decoration:none;">
								<button class="btn btn-light">
									<i class="fas fa-redo"></i>
								</button>
							</a>

						</div>
					</div>
				</div>
				<div class="card-body" style="max-height:400px;overflow: auto">
					<div class="row no-gutters align-items-center">

				<?php
              	if ($c_user>0){
                	foreach ($user_online as $datas){
              	?>

						<div class="col-12 mr-2 card mb-3 p-md-2 border-0 shadow-sm">
							<div class="row">
								<div class='col-3'>
									<img src="<?php echo base_url().'assets/'.$datas->image; ?>"
										class="shadow-sm gambar_employee" alt="...">
								</div>
								<div class='col-5 pt-0'>
									<b style="font-size:25px"><?php echo $datas->username;?></b>
									<p class="card-text" style="margin-top:-5px"><small class="text-primary">Outlet : <?php echo $datas->id_outlet;?></small>
									</p>
								</div>
								<div class="col-4 pt-2">
									<?php
										if ($datas->status_login=="Online") {
											echo '<i class="fas fa-user-check text-success">Online</i>';
										} else if($datas->status_login=="Offline"){
											echo '<i class="fas fa-user-alt-slash text-danger text-10 mb-0">Offline</i>';
										}
									?>
									<p class="card-text"><small class="text-primary"><?php echo $datas->last_seen;?></small>
								</div>
							</div>
						</div>
				<?php
                }}
                  ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-md-6 mb-4" >
			<div class="card shadow h-100 py-2">
				<div class="col-12 mr-2">
						<div class="row mb-2">
							<div class="col-12 shadow-sm mb-3" style="height:49px">
								<h3>Info</h3>
							</div>	
							<div class="col-xl-6 col-md-6 mb-4">
								<div class="card border-left-success shadow h-100 py-2 menu_card">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<center>
														<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Pendapatan</div>
														<div class="h5 mb-0 font-weight-bold text-gray-800">
															<?php echo json_encode( $total_pendapatan ,JSON_NUMERIC_CHECK );?></div>
													</center>
												</div>
												<!-- <div class="col-auto">
													<i class="fas fa-money-check-alt fa-2x text-gray-300"></i>
												</div> -->
											</div>
										</div>
									</a>
								</div>
							</div>	
							<div class="col-xl-6 col-md-6 mb-4">
								<div class="card border-left-warning shadow h-100 py-2 menu_card">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<center>
														<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Rata-rata Pendapatan / Hari</div>
														<div class="h5 mb-0 font-weight-bold text-gray-800">
															<?php echo json_encode($total_transaksi_hari,JSON_NUMERIC_CHECK );?></div>
													</center>
												</div>
												<!-- <div class="col-auto">
													<i class="fas fa-money-check-alt fa-2x text-gray-300"></i>
												</div> -->
											</div>
										</div>
									</a>
								</div>
							</div>	
							<div class="col-xl-6 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2 menu_card">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<center>
														<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Transaksi Lunas</div>
														<div class="h5 mb-0 font-weight-bold text-gray-800">
															<?php echo $total_transaksi_harian;?></div>
													</center>
												</div>
												<!-- <div class="col-auto">
													<i class="fas fa-money-check-alt fa-2x text-gray-300"></i>
												</div> -->
											</div>
										</div>
									</a>
								</div>
							</div>	
							<div class="col-xl-6 col-md-6 mb-4">
								<div class="card border-left-danger shadow h-100 py-2 menu_card">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<center>
														<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">transaksi Pending</div>
														<div class="h5 mb-0 font-weight-bold text-gray-800">
															<?php echo $total_transaksi_harian;?></div>
													</center>
												</div>
												<!-- <div class="col-auto">
													<i class="fas fa-money-check-alt fa-2x text-gray-300"></i>
												</div> -->
											</div>
										</div>
									</a>
								</div>
							</div>												
						</div>
					</div>
					
				</a>
			</div>
		</div>
	</div>
</main>
