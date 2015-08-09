<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style type="text/css">
	    </style>
    <?php
        $this->load->view('include/head'); 
    ?>

  </head>
 <body class="skin-blue layout-top-nav">
    <div class="wrapper">
    <?php 
          $this->load->view('include/header')
          ?>

          
      <!-- Full Width Column -->
	  <div class="content-wrapper">
        <div class="container">
        	<br>
        <div class="row">
        	<div class="box box-default">
              <div class="box-header with-border">
                <img src="<?php echo base_url('') ?>image/acratech_logo.png"></img>
              </div>
              <div class="box-body">
                <p>
					Asia Creative Technology Studio (Acratech Studio) is a group of three young developers. 
					Our focus is mainly in developing interactive and informative 
					web applications. We extensively use PHP as our development platform because of its
					user friendlyness, abundance of resources, and community support.
				</p>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
        	<div class="callout callout-info">
        		<div class="pull-right">
            		<img height="140px" src="<?php echo base_url('') ?>image/erlangga.png" alt="Erlangga Krisnamukti" />
            	</div>
              	<h4>Erlangga Krisnamukti</h4>   
              	<p>
              		<br>
              		Surabaya, May 12 1993
					<br>
					-Currently finishing his final paper at Information Technology - Institut Teknologi Sepuluh Nopember, Surabaya, Indonesia.
					<br>
					-Favorite Programming Language:  Java.
					<br>
					<a href="https://twitter.com/iamerlanggakm" class="twitter-follow-button" data-show-count="true" data-size="small">Follow @iamerlanggakm</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</p>     	
            </div>
            <div class="callout callout-info">
        		<div class="pull-right">
            		<img height="140px" src="<?php echo base_url('') ?>image/naasa.png" alt="Naasa Fikri" />
            	</div>
              	<h4>Naasa Fikri</h4>   
              	<p>
              		<br>
              		Ponorogo, September 28 1993
					<br>
					-Currently studying Computer Engineering at University of Missouri, Columbia, USA.
						<br>
						-Favorite Programming Language: C, C++, C#.
						<br>
						<a href="https://twitter.com/xNAFx" class="twitter-follow-button" data-show-count="true" data-size="small">Follow @xNAFx</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</p>     	
            </div>
            <div class="callout callout-info">
        		<div class="pull-right">
            		<img height="140px" src="<?php echo base_url('') ?>image/aji.png" alt="Dwi Al Aji Suseno" />
            	</div>
              	<h4>Dwi Al Aji Suseno</h4>   
              	<p>
              		<br>
              		Banyuwangi, 19 Juni 1993
					<br>
					-Currently studying Information Technology at Institut Teknologi Sepuluh Nopember, Surabaya, Indonesia.
					<br>
					-Favorite Programming Language: PHP.
					<br>
					<a href="https://twitter.com/dwisuseno_" class="twitter-follow-button" data-show-count="true" data-size="small">Follow @dwisuseno_</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</p>     	
            </div>
        </div>
	  	
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