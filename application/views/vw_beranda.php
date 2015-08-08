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
    <div class="wrapper" >

      <?php 
          $this->load->view('include/header')
          ?>
      <!-- Full Width Column -->
      
      <div class="content-wrapper back" >
            <img  src="<?php echo base_url('')?>image/jakarta_map.png">
      </div><!-- /.content-wrapper -->
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