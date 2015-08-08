<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style type="text/css">
	#info {
		margin: auto;
		max-width: 600px;
		min-width: 320px;
		background-color: white;
		padding: 10px;
	}
	.profile {		
		margin: auto;
		max-width: 600px;
		min-width: 320px;
		background-color: white;
		padding: 20px;
	}
	.profile img {
		padding: 10px;
	}
    </style>
    <?php
        $this->load->view('include/head'); 
    ?>

  </head>
<body class="skin-blue layout-top-nav">
    <?php 
          $this->load->view('include/header')
          ?>
      <!-- Full Width Column -->
	  <div id="sharebutton">
		<span class='st_twitter' displayText='Tweet'></span>
		<span class='st_facebook' displayText='Facebook'></span>
		<span class='st_linkedin' displayText='LinkedIn'></span>
		<span class='st_pinterest' displayText='Pinterest'></span>
		<span class='st_whatsapp' displayText='WhatsApp'></span>
		<span class='st_email' displayText='Email'></span>
	  </div>
	  <div id="info">
		<img src="<?php echo base_url('') ?>image/acratech_logo.png"></img>
		<p>
			Asia Creative Technology Studio (Acratech Studio) is a group of three young developers. 
			Our focus is mainly in developing interactive and informative 
			web applications. We extensively use PHP as our development platform because of its
			user friendlyness, abundance of resources, and community support.
		</p>
	  
	  <div class = "profile">
		<img src="<?php echo base_url('') ?>image/erlangga.png"></img>
		<br>
		<b>Erlangga Krisnamukti</b>
		<br>
		-Surabaya, May 12 1993
		<br>
		-Currently finishing his final paper at Information Technology - Institut Teknologi Sepuluh Nopember, Surabaya, Indonesia.
		<br>
		-Favorite Programming Language:  Java.
		<br>
		<a href="https://twitter.com/iamerlanggakm" class="twitter-follow-button" data-show-count="true" data-size="small">Follow @iamerlanggakm</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	  </div>
	  <div class = "profile">
		<img src="<?php echo base_url('') ?>image/aji.png"></img>
		<br>
		<b>Dwi Al Aji Suseno</b>
		<br>
		-Banyuwangi, June 19 1993
		<br>
		-Currently studying Information Technology at Institut Teknologi Sepuluh Nopember, Surabaya, Indonesia.
		<br>
		-Favorite Programming Language: PHP.
		<br>
		<a href="https://twitter.com/dwisuseno_" class="twitter-follow-button" data-show-count="true" data-size="small">Follow @dwisuseno_</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	  </div>
	  <div class = "profile">
		<img src="<?php echo base_url('') ?>image/naasa.png"></img>
		<br>
		<b>Naasa Fikri</b>
		<br>
		-Ponorogo, September 28 1993
		<br>
		-Currently studying Computer Engineering at University of Missouri, Columbia, USA.
		<br>
		-Favorite Programming Language: C, C++, C#.
		<br>
		<a href="https://twitter.com/xNAFx" class="twitter-follow-button" data-show-count="true" data-size="small">Follow @xNAFx</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	  </div>
	  </div>
      <?php 
		$this->load->view('include/footer');
      ?><!-- ./wrapper -->

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