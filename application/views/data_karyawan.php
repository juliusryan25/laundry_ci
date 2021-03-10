<main role="main" class="container-fluid">
	<div class="row">

		<div class="col-2">
			&nbsp&nbsp&nbsp&nbsp<h3>Employe</h3>
		</div>
		<div class="col-7">
			<button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#add"> <i
					class="far fa-address-card"></i> &nbsp+</butttom>
		</div>
		<div class="col-3">
			<a href="<?php echo site_url('sistem/cetakDataUser_excel'); ?>" class="btn btn-success col-12 mt-4 w-75"
				style="float:right"> Generate XLS <i class="fas fa-file"></i> </a>
		</div>

		<div class="col-sm-12 mt-4">
			<div class="table-responsive mb-4">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<td>ID</td>
							<td>Username</td>
							<td>Email</td>
							<td>No.Telp</td>
							<td>Password</td>
							<td>Id_Outlet</td>
							<td>Status</td>
							<td>Images</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						<?php
              if ($c_user>0){
                foreach ($user as $datas){
              ?>
						<tr>
							<td><?php echo $datas->id_user;?></td>
							<td><?php echo $datas->username;?></td>
							<td><?php echo $datas->email;?></td>
							<td><?php echo $datas->no_telp;?></td>
							<td><?php echo $datas->password;?></td>
							<td><?php foreach($outlet as $cabang) : ?>
								<?php if( $cabang->id_outlet == $datas->id_outlet) { ?>
								<?= $cabang->nama; ?>
								<?php } ?>
								<?php endforeach; ?>

							</td>
							<td><?php echo $datas->status;?></td>
							<td><img style="width :100px" src="<?php echo base_url('assets/'.$datas->image)?>" alt=""></td>
							<td>
								<div class="col-12">
									<a href="<?php echo site_url('sistem/edit_data_user/'.$datas->id_user); ?>"> <button
											class=" btn btn-success btn-sm edit_data" style="width: 100%;"><i class="fas fa-edit"></i>
										</button></a>
								</div>
								<div class="col-12 mt-2">
									<button data-toggle="modal" data-target="#exampleModal" class=" btn btn-danger btn-sm hapus_data"
										style="width: 100%;"><i class="fas fa-trash"></i> </button>
								</div>
							</td>
						</tr>
						<?php }
                } else {
                  ?>
						<tr>
							<td colspan="8">
								<center> Data user kosong!</center>
							</td>
						</tr>
						<?php
                }
                  ?>
					</tbody>
			</div>
		</div>
	</div>

	<!-- Modal -->

	<div class="modal fade " id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary" style="color:white">
					<h5 class="modal-title" id="exampleModalLabel">ADD EMPLOYE</h5>
					<button type="button " class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="row">
					<div class="modal-body " style="text-align:center">
						<div class="col-12">
							<div class="card shadow" style="max-width: 100%; margin-top: 1%;margin-bottom: 2%;">
								<div class="row no-gutters">
									<div class="col-md-4" style="margin-top: 7.5%;">
										<img src="<?php echo base_url(); ?>assets/image/lon.png" class="card-img" alt="...">
									</div>
									<div class="col-md-8" style="background:linear-gradient(to right,white,white);">
										<div class="card-body" style="margin: 2%;">
											<div class="row">
												<div class="col-sm-12">
													<center>
														<h4 class="card-title " style="color: black;">Employe</h4>
												</div>
												<form action="<?php echo site_url('sistem/simpan_data');?>" method="post"
													enctype="multipart/form-data">

													<div class="col-sm-12">
														<label class="sr-only" for="inlineFormInputGroup">Username</label>
														<div class="input-group mb-2">
															<div class="input-group-prepend">
																<div class="input-group-text" style="width: 97px;">Username</div>
															</div>
															<input type="text" class="form-control" id="inlineFormInputGroup" name="username"
																placeholder="">
														</div>
													</div>
													<div class="col-sm-12">
														<label class="sr-only" for="inlineFormInputGroup">email</label>
														<div class="input-group mb-2">
															<div class="input-group-prepend">
																<div class="input-group-text" style="width: 97px;">Email</div>
															</div>
															<input type="email" class="form-control" id="inlineFormInputGroup" name="email"
																placeholder="">
														</div>
													</div>
													<div class="col-sm-12">
														<label class="sr-only" for="inlineFormInputGroup">no telpon</label>
														<div class="input-group mb-2">
															<div class="input-group-prepend">
																<div class="input-group-text" style="width: 97px; text-align: center;">No.Telp</div>
															</div>
															<input type="text" class="form-control" id="inlineFormInputGroup" name="telepon"
																placeholder="">
														</div>
													</div>
													<div class="col-sm-12">
														<label class="sr-only" for="inlineFormInputGroup">Password</label>
														<div class="input-group mb-2">
															<div class="input-group-prepend">
																<div class="input-group-text" style="width: 97px; text-align: center;">Password</div>
															</div>
															<input type="password" class="form-control" id="inlineFormInputGroup" name="password"
																placeholder="">
														</div>
													</div>
													<div class="col-sm-6">
														<label class="sr-only" for="inlineFormInputGroup">id_outlet</label>
														<div class="input-group mb-2">
															<div class="input-group-prepend">
																<div class="input-group-text" style="width: 97px; text-align: center;">Id_Outlet</div>
															</div>
															<select class="custom-select" id="cabang" name="id_outlet">
																<option value="" selected disabled> Choose </option>
																<?php foreach($outlet as $cabang) : ?>
																<!-- /</?php if( $cabang == $edit->jenis_cabang) { ?> -->
																<option value="<?= $cabang->id_outlet; ?>"><?= $cabang->nama; ?></option>
																<!-- /</?php }?> -->
																<?php endforeach; ?>
															</select>
															<?= form_error('cabang', '<small class="text-danger">', '</small>'); ?>
															<!-- <input type="text" class="form-control" readonly id="inlineFormInputGroup" value="<?php echo $this->session->userdata('out');?>" name="id_outlet" placeholder=""> -->
														</div>
													</div>
													<div class="col-sm-6">
														<label class="sr-only" for="inlineFormInputGroup">Status</label>
														<div class="input-group mb-2">
															<div class="input-group-prepend">
																<label class="input-group-text" style="width: 97px; text-align: center;"
																	for="inputGroupSelect01">Status</label>
															</div>
															<select class="custom-select" name="status" id="inputGroupSelect01">
																<option selected>Choose...</option>
																<option value="Admin">Admin</option>
																<option value="Kasir">Kasir</option>
																<option value="Owner">Owner</option>
															</select>
														</div>
													</div>
													<div class="col-12">
														<div class="input-group mb-3">
															<div class="input-group-prepend">
																<span class="input-group-text" style="width: 97px;"
																	id="inputGroupFileAddon01">Images</span>
															</div>
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="inputGroupFile01" name="gambar"
																	aria-describedby="inputGroupFileAddon01">
																<label style="text-align:left" class="custom-file-label"
																	for="inputGroupFile01">Choose...</label>
															</div>
														</div>
														<button type="submit" name="save" class="btn btn-primary"><img
																src="<?php echo base_url();?>assets/image/save.png" alt=""> Save</button>&nbsp&nbsp&nbsp

														</center>
													</div>


												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header " style="background:red;color:white">
					<h5 class="modal-title" id="exampleModalLabel">Delete</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body " style="text-align:center">
					<center> <img src="<?php echo base_url(); ?>assets/image/seru.png" style="width:150px" class="card-img"
							alt="..."></center><br>
					Are You Sure ? .....
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<a href="<?php echo site_url('sistem/delete_data_user/'.$datas->id_user); ?>"> <button type="button"
							class="btn btn-primary">Yes</button></a>
				</div>
			</div>
		</div>
	</div>

</main>
