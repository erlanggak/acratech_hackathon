<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
<<<<<<< HEAD
    <style type="text/css">
	#info {
		margin: auto;
		width: 60%;
		background-color: white;
		padding: 10px;
	}
	.profile {
		margin: auto;
		width: 60%;
		background-color: white;
		padding: 20px;
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
	  <div id="info">
		<img src="<?php echo base_url('') ?>image/acratech_logo.png"></img>
		<p>
			Asia Creative Technology Studio (Acratech Studio) is a group of three young developers. 
			Our focus is mainly in developing interactive and informative 
			web applications. We extensively use PHP as our development platform because of its
			user friendlyness, abundance of resources, and community support.
		</p>
	  
	  <div class = "profile">
		<b>Erlangga Krisnamukti<b>
		
	  </div>
	  <div class = "profile">
		<b>Dwi Al Aji Suseno<b>
		
	  </div>
	  <div class = "profile">
		<b>Naasa Fikri<b>
		
	  </div>
	  </div>
      <?php 
		$this->load->view('include/footer');
      ?><!-- ./wrapper -->
=======
    
    <?php
        $this->load->view('include/head'); 
    ?>
   
  </head>
<body class="skin-blue layout-top-nav">
    <div class="wrapper" >

      <?php 
          $this->load->view('include/header')
          ?>
      <!-- Full Width Column -->
       <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              About Us
              <small>Acratech Studio</small>
            </h1>
            
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="callout callout-info">
              <h4>Tip!</h4>
              <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular links instead.</p>
              <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular links instead.</p>
              <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular links instead.</p>
              <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular links instead.</p>
              <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular links instead.</p>
              <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular links instead.</p>
            </div>
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <?php $this->load->view('include/footer');
      ?>
    </div><!-- ./wrapper -->
>>>>>>> 06a04cbaa08caa4c9edfebd26a984b580734661b

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