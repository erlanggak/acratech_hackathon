<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    
    <?php
        $this->load->view('include/head');
		$hashtag = "something"
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
      <?php 
          $this->load->view('include/header')
      ?>
     
        <div>instagram feed</div>
		<div id="instafeed"> </div>
		
     
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