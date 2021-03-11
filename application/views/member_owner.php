<main role="main" class="container-fluid">
	<div class="row">

		<div class="col-2">
			&nbsp&nbsp&nbsp&nbsp<h3>Member</h3>
		</div>
		<div class="col-7"></div>
		<div class="col-3">
			<a href="<?php echo site_url('sistem/cetakDataMember_excel'); ?>" class="btn btn-success col-12 mt-4 w-75"
				style="float:right"> Generate XLS <i class="fas fa-file"></i> </a>
		</div>
		<div class="col-md-12 mt-4">
		  <div class="card p-md-3 shadow">
			<div class="table-responsive mb-4">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<td>No</td>
							<td>Nama</td>
							<td>Alamat</td>
							<td>No.Telepon</td>
							<td>Gender</td>							
						</tr>
					</thead>
					<tbody>
						<?php
              if ($c_member>0){
                foreach ($member as $datas){
              ?>
						<tr>
							<td><?php echo $datas->id_member;?></td>
							<td><?php echo $datas->nama;?></td>
							<td><?php echo $datas->alamat;?></td>
							<td><?php echo $datas->tlp;?></td>
							<td><?php echo $datas->jenis_kelamin;?></td>							
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
	</div>

	<!-- Modal -->
	<div class="modal fade " id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary" style="color:white">
					<h5 class="modal-title" id="exampleModalLabel">ADD MEMBER</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="row">
					<div class="modal-body " style="text-align:center">
						<div class="col-12">
							<div class="card shadow" style="max-width: 100%; margin-top: 1%;margin-bottom: 2%;">
								<div class="row no-gutters">
									<div class="col-md-4" style="margin-top: 5%;">
										<img src="<?php echo base_url(); ?>assets/image/lon.png" class="card-img" alt="...">
									</div>
									<div class="col-md-8" style="background:linear-gradient(to right,white,white);">
										<div class="card-body" style="margin: 2%;">
											<div class="row">
												<div class="col-sm-12">
													<center>
														<h4 class="card-title " style="color: black;">Member</h4>
												</div>
												<form action="<?php echo site_url('sistem/simpan_member');?>" method="post"
													enctype="multipart/form-data">

													<div class="col-sm-12">
														<label class="sr-only" for="inlineFormInputGroup">Nama</label>
														<div class="input-group mb-2">
															<div class="input-group-prepend">
																<div class="input-group-text" style="width: 97px;">Nama</div>
															</div>
															<input type="text" class="form-control" id="inlineFormInputGroup" name="nama"
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
														<label class="sr-only" for="inlineFormInputGroup">alamat</label>
														<div class="input-group mb-2">
															<div class="input-group-prepend">
																<div class="input-group-text" style="width: 97px;">Alamat</div>
															</div>
															<textarea name="alamat" id="" cols="68.9" style="border-radius:5px" rows="5"></textarea>
														</div>
													</div>
													<div class="col-sm-12">
														<label class="sr-only" for="inlineFormInputGroup">Jenis</label>
														<div class="input-group mb-2">
															<div class="input-group-prepend">
																<label class="input-group-text" style="width: 97px; text-align: center;"
																	for="inputGroupSelect01">Gender</label>
															</div>
															<select class="custom-select" name="jeniskelamin" id="inputGroupSelect01">
																<option selected>Choose...</option>
																<option value="L">Laki-laki</option>
																<option value="P">Perempuan</option>

															</select>
														</div>
													</div>
											</div>

											<center>

												<button type="submit" name="save" class="btn btn-primary"><img
														src="<?php echo base_url();?>assets/image/save.png" alt=""> Save</button>&nbsp&nbsp&nbsp

											</center>
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

	<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background:red;color:white">
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
					<a href="<?php echo site_url('sistem/delete_data/'.$datas->id_member); ?>"> <button type="button"
							class="btn btn-primary">Yes</button></a>
				</div>
			</div>
		</div>
	</div>
</main>
