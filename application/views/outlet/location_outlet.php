<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="utf-8">	
	<style>
		/* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
		#map {
			height: 550px;
		}

		/* Optional: Makes the sample page fill the window. */
		html,
		body {
			height: 100%;
			margin: 0;
			padding: 0;
		}

	</style>
</head>

<body>
	<div class="row">
		<?php
            foreach($data_location_outlet as $e):?>
		    <input type="hidden" name="long" id="long" value="<?php echo $e->long;?>">
            <input type="hidden" name="lat" id="lat" value="<?php echo $e->lat;?>">                     		
            
		<div class="col-1">
			<a href="<?php echo site_url('owner/indexowner/outlet_owner'); ?>"
				class="btn btn-light shadow col-12 mt-4 w-75"><i class="fas fa-chevron-left"></i> </a>
		</div>
		<div class="col-11">
			&nbsp&nbsp&nbsp&nbsp<h3>Location Outlet</h3>
		</div>
		<div class="col-12 mt-3 mb-2">
			<!-- elemen untuk menampilkan peta -->
			<div id="map"></div>
		</div>
	</div>
    <script type="text/javascript" src="<?php echo base_url().'assets/Jquery/jquery.js' ?>"></script>

    <script>

function initMap() {
    var lat1 = -6.385589;
    var long1 =  106.830711;
  // membuat objek untuk titik koordinat
  var location = {
      lat: lat1, 
      lng: long1
    };
  
  // membuat objek peta
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 9,
    center: location
  });

  // mebuat konten untuk info window
  var contentString = '<h2>Location!</h2>';

  // membuat objek info window
  var infowindow = new google.maps.InfoWindow({
    content: contentString,
    position: location
  });
  
  // tampilkan info window pada peta
  infowindow.open(map);

  
}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?callback=initMap">
</script>
<?php endforeach ?>
</body>

</html>
