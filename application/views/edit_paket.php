<main role="main" class="container-fluid" style="margin-top: 7%;>
<div class=" row">
	<div class="col-12">
		<div class="card" style="max-width: 100%; margin-top: 1%;margin-bottom: 2%;border-color: dodgerblue;">
			<div class="row no-gutters">
				<div class="col-md-4" style="margin-top: 2.5%;">
					<img src="<?php echo base_url(); ?>assets/image/lon.png" class="card-img" alt="...">
				</div>
				<div class="col-md-8" style="background:linear-gradient(to right,white,dodgerblue);">
					<div class="card-body" style="margin: 2%;">
						<div class="row">
							<div class="col-sm-12">

								<form action="<?php echo site_url('sistem/aksi_edit_paket');?>" method="post"
									enctype="multipart/form-data">

									<?php
                        foreach($data_edit_paket as $e):?>
									<input type="hidden" name="id_paket" value="<?php echo $e->id_paket;?>">

									<center>
										<h4 class="card-title " style="color: white;">Edit Paket</h4>
							</div>
							<form action="<?php echo site_url('sistem/simpan_data_paket');?>" method="post"
								enctype="multipart/form-data">

								<div class="col-sm-12">
									<label class="sr-only" for="inlineFormInputGroup">id_outlet</label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text" style="width: 97px;">Id_Outlet</div>
										</div>
										<input type="number" value="<?php echo $e->id_outlet;?>" readonly class="form-control"
											id="inlineFormInputGroup" name="idout" placeholder="">
									</div>
								</div>
								<div class="col-sm-12">
									<label class="sr-only" for="inlineFormInputGroup">Jenis</label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<label class="input-group-text" style="width: 97px; text-align: center;"
												for="inputGroupSelect01">Jenis</label>
										</div>
										<select class="custom-select" value="<?php echo $e->jenis;?>" name="jenis" id="inputGroupSelect01">
											<option selected>Choose...</option>
											<option value="kiloan">Kiloan</option>
											<option value="selimut">Selimut</option>
											<option value="bed_cover">Bed Cover</option>
											<option value="kaos">Kaos</option>
											<option value="lain-lain">Lain-lain</option>

										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<label class="sr-only" for="inlineFormInputGroup">Harga</label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text" style="width: 97px;">Harga</div>
										</div>
										<input type="text" value="<?php echo $e->harga;?>" class="form-control" id="inlineFormInputGroup"
											name="harga" placeholder="">
									</div>
								</div>
								<div class="col-sm-6">
									<label class="sr-only" for="inlineFormInputGroup">diskon</label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text" style="width: 97px;">diskon</div>
										</div>
										<input type="text" value="<?php echo $e->diskon;?>" class="form-control" id="inlineFormInputGroup"
											name="diskon" placeholder="">
									</div>
								</div>
								<div class="col-sm-12">
									<label class="sr-only" for="inlineFormInputGroup">Nama_Paket</label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text" style="width: 117px;">Nama_Paket</div>
										</div>
										<input type="text" value="<?php echo $e->nama_paket;?>" class="form-control"
											id="inlineFormInputGroup" name="nama_paket" placeholder="">
									</div>
								</div>

								<div class="col-12">
									<center>

										<button type="submit" name="save" class="btn btn-primary"><img
												src="<?php echo base_url();?>assets/image/save.png" alt=""> Save</button>&nbsp&nbsp&nbsp


										<?php endforeach ?>
							</form>
							<a class="btn btn-danger" href="<?php echo site_url('sistem/index/paket'); ?>">Cancel</a>
							</center>
						</div>



					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
</main>
