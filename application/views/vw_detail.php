<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style type="text/css">
    </style>
    <?php
        $this->load->view('include/head'); 
		$string = base_url('')."/xml/coffee_shop.xml";
		$xml=simplexml_load_file($string) or die("Error: Cannot create object");
		$coffeeShopName = $xml->result->{'item' .$_GET['id']}->name;		
		$arr = explode(' ',trim($coffeeShopName));
		$hashtag = $arr[0].$arr[1];
    ?>

	<style>
	#content {
		background-color: white;
	}
	#sharebutton {
		padding: 10px;
	}
    #map-canvas {
        height: 320px;
		width: 320px;
		float: left;
      }
	#instafeed {
		white-space:nowrap;
	}
	#bottom {
		float: bottom;
	}
	#details {
		height: 320px;
		width: 320px;
		float: left;
		padding: 20px;
	}
    </style>
		
	<script type="text/javascript" src="plugins/instafeed/instafeed.js"></script>	
	<script type="text/javascript">
		var feed = new Instafeed({
			get: "tagged",
			tagName: "<?php echo $hashtag?>",
			clientId: "14fe48638b634d2c9a0bf577fa19ec62"
		});
    feed.run();
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
	function initialize() {
	  var myLatlng = new google.maps.LatLng(<?php echo $xml->result->{'item' .$_GET['id']}->latitude?>,<?php echo $xml->result->{'item' .$_GET['id']}->longitude ?>);
	  var mapOptions = {
		zoom: 20,
		center: myLatlng
	  }
	  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	  var marker = new google.maps.Marker({
		  position: myLatlng,
		  map: map,
		  title: 'Hello World!'
	  });
	}

	google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    </head>
<body class="skin-blue layout-top-nav">
    <div class="wrapper" id="content">
	<?php 

			$this->load->view('include/header')
	?>
	
	<div class="row">
	<div id="map-canvas">
	</div>
	<div id="details">
		<?php
		echo "Name\t: ". $xml->result->{'item' .$_GET['id']}->name . "<br>";
		echo "Longitude\t: ". $xml->result->{'item' .$_GET['id']}->longitude. "<br>";
		echo "Latitude\t: ". $xml->result->{'item' .$_GET['id']}->latitude. "<br>";
		echo "Village\t: ". $xml->result->{'item' .$_GET['id']}->village. "<br>";
		echo "Subdistrict\t: ". $xml->result->{'item' .$_GET['id']}->subdistrict. "<br>";
		echo "District\t: ". $xml->result->{'item' .$_GET['id']}->district. "<br>";
		echo "Address\t: ". $xml->result->{'item' .$_GET['id']}->address. "<br>";
		echo "Telephone\t: ". $xml->result->{'item' .$_GET['id']}->telephone. "<br>";
		?>
	</div>
	</div>
	<div class="row">
	<div id="sharebutton">
	<span class='st_facebook_large'></span>
	<span class='st_twitter_large'></span>
	<span class='st_linkedin_large'></span>
	<span class='st_pinterest_large'></span>
	<span class='st_whatsapp_large' ></span>
	<span class='st_email_large'></span>
	</div>

	<div>
		<form method="post" action="<?echo base_url('')?>detail/input"> 
			<input type="textarea" name="input_comment" placeholder="Your comment here...">
			<input type="submit" value="Comment" name="input"/>
		</form>
	</div>
	
	<div>instagram feed</div>
	<div id="instafeed">	
	</div>
	
	</div>
	<?php $this->load->view('include/footer');
    ?>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('')?>plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url('')?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url('')?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('')?>plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('')?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('')?>dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>