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
		echo str_word_count($coffeeShopName);
		echo $hashtag;
		//$hashtag = "Coffee";
    ?>

	<style>
      #map-canvas {
        height: 100%;
        margin: 10%;
		padding: 0;
      }
	#instafeed {
		white-space:nowrap;
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
	
  </head>
<body class="skin-blue layout-top-nav">
    <div class="wrapper" >

		<?php 
			$this->load->view('include/header')
		?>
	  <!-- Full Width Column -->
	  
	  <div class="content-wrapper back" >
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
			<form method="post" action="<?=base_url()?>user/input"> 
			
			
			<input type="text" name="input_comment" placeholder="Your comment here...">
			<input type="submit" value="Comment" name="input"/>
			</form>
			
		</div>
		<div>instagram feed</div>
		<div id="instafeed"> </div>
	  <!-- /.content-wrapper -->
      <?php $this->load->view('include/footer');
      ?>
    </div><!-- ./wrapper -->

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