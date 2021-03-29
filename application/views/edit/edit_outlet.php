<style type="text/css">
	#mapa {
		/* margin: 10px; */
		width: 100%;
		height: 300px;
		padding: 10px;
	}

</style>
<script
	src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAA7A7Eu8gZ_mTslgWnRR9TGRQByQgPDcFg0q0wOb9u6rRtBOFyKBQD4QgfPHRxBFGL7JviJdz_jAlHfw"
	type="text/javascript"></script>
<main role="main" class="container-fluid" style="margin-top: 5%;">
	<div class="row">
		<div class="col-12">
			<div class="card shadow" style="max-width: 100%; margin-top: 1%;margin-bottom: 2%;">
				<div class="row no-gutters">
					<div class="col-md-4" style="margin-top: 4.5%;">
						<img src="<?php echo base_url(); ?>assets/image/lon.png" class="card-img" alt="...">
					</div>
					<div class="col-md-8" style="background:linear-gradient(to right,white,white);">
						<div class="card-body" style="margin: 2%;">
							<center>
								<h4 class="card-title" style="color: black;">Edit Outlet</h4>

								<form action="<?php echo site_url('sistem/aksi_edit_outlet');?>" method="post"
									enctype="multipart/form-data">

									<?php
                        foreach($data_edit_outlet as $e):?>
									<input type="hidden" name="id_outlet" value="<?php echo $e->id_outlet;?>">
									<div class="col-auto">
										<label class="sr-only" for="inlineFormInputGroup">Username</label>
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 101.5px;">Outlet</div>
											</div>
											<input type="text" class="form-control" id="inlineFormInputGroup" name="nama"
												value="<?php echo $e->nama; ?>" placeholder="">
										</div>
									</div>
									<div class="col-auto">
										<label class="sr-only" for="inlineFormInputGroup">tlp</label>
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 101.5px;">No.Telp</div>
											</div>
											<input type="text" value="<?php echo $e->tlp; ?>" class="form-control" id="inlineFormInputGroup"
												name="telepon" placeholder="">
										</div>
									</div>
									<div class="col-auto">
										<label class="sr-only" for="inlineFormInputGroup">alamat</label>
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text" style="width: 101.5px;">Alamat</div>
											</div>
											<textarea name="alamat" id="alamat" cols="51" style="border-radius:5px"
												rows="5"><?php echo $e->alamat;?></textarea>
										</div>
									</div>
									<div class="col-12 mb-2">
										<div id="mapa"></div>
									</div>
                  				<div class="col-12">
														<label class="sr-only" for="inlineFormInputGroup">Long</label>
														<div class="input-group mb-2">
															<div class="input-group-prepend">
																<div class="input-group-text" style="width: 115px;">Long</div>
															</div>
															<input type="text" class="form-control" id="long" name="long"
																placeholder="longitude" value="<?php echo $e->long; ?>">
														</div>
													</div>
													<div class="col-12">
														<label class="sr-only" for="inlineFormInputGroup">Lat</label>
														<div class="input-group mb-2">
															<div class="input-group-prepend">
																<div class="input-group-text" style="width: 115px;">Lat</div>
															</div>
															<input type="text" class="form-control" id="lat" name="lat"
																placeholder="latitude" value="<?php echo $e->lat; ?>">
														</div>
													</div>
									<center>
										<button type="submit" name="save" class="btn btn-primary"><img
												src="<?php echo base_url();?>assets/image/save.png" alt=""> Save</button>&nbsp&nbsp&nbsp


										<?php endforeach ?>
								</form>
								<a href="<?php echo site_url('sistem/index/outlet'); ?>"><button class="btn btn-danger">
										Cancel</button></a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <script type="text/javascript" src="<?php echo base_url().'assets/Jquery/jquery.js' ?>"></script>
	<script type="text/javascript">
		if (GBrowserIsCompatible()) {
      
			map = new GMap2(document.getElementById("mapa"));		
			map.addControl(new GLargeMapControl());
			map.addControl(new GMapTypeControl(3));         
			map.setCenter(new GLatLng( Number(document.getElementById("lat").value),  Number(document.getElementById("long").value)), 11, 0);
            
			
			GEvent.addListener(map, 'click', function (overlay, point) {		      
				document.getElementById('lat').value = point.lat()
				document.getElementById('long').value = point.lng()   												
					
			});
		}

// 		function initMap() {
   
//    // membuat objek untuk titik koordinat
//    var location = {
// 	   lat: Number(document.getElementById("lat").value), 
// 	   lng: Number(document.getElementById("long").value)
// 	 };
   
//    // membuat objek peta
//    var map = new google.maps.Map(document.getElementById('mapa'), {
// 	 zoom: 9,
// 	 center: location
//    });
 
//    // mebuat konten untuk info window
//    var contentString = String(document.getElementById("alamat").value);
 
//    // membuat objek info window
//    const infowindow = new google.maps.InfoWindow({
// 	 content: contentString,
// 	 position: location
//    });
 
//    const marker = new google.maps.Marker({
// 	 position: location,
// 	 map,
// 	 title: "Location!",
//    });
 
//    marker.addListener("click", () => {
// 	 infowindow.open(map, marker);
//    });

   		 
   
//    	// map.addListener(map , "click", function (overlay, point) {
// 	// 			// document.getElementById('latlongclicked').value = point.lat() + ', ' + point.lng()        
// 	// 			document.getElementById('lat').value = point.lat();
// 	// 			document.getElementById('long').value = point.lng();        
// 	// 		});
//    // tampilkan info window pada peta
// //    infowindow.open(map);

   
//  }

	</script>
  <!-- <script 
src="https://maps.googleapis.com/maps/api/js?callback=initMap">
</script> -->
