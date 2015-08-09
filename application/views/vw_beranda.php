<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    
    <?php
        $this->load->view('include/head'); 
    ?>
    <style type="text/css">
      img#enjoy {
        position:absolute;
        margin-left:auto;
         margin-right:auto;
         margin-top:auto;
         margin-bottom:auto;
         left:0;
         right:0;
         top:70px;
         bottom:0;
      }
      
    </style>
  </head>
<body class="skin-blue layout-top-nav" >
    <div class="wrapper"  >

      <?php 
          $this->load->view('include/header')
          ?>
      <!-- Full Width Column -->
      
      <div class="content-wrapper"  >
            <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            
            
            
            <?php   
                  if(isset($_SESSION['username']) || isset($_SESSION['password'])){ ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>About</h3>
                  <p>Asia Creative Technology</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cube"></i>
                </div>
                <a href="<?php echo base_url('')?>beranda/aboutus" class="small-box-footer">find more <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <?php } else {?>
            <div class="col-lg-3 col-xs-6" >
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>Login</h3>
                  <p>You can find more amazing place</p>
                </div>
                <div class="icon">
                  <i class="ion ion-log-in"></i>
                </div>
                <a href="<?php echo base_url('')?>login" class="small-box-footer">continue <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>About</h3>
                  <p>Asia Creative Technology</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cube"></i>
                </div>
                <a href="<?php echo base_url('')?>beranda/aboutus" class="small-box-footer">find more <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          <?php } ?>
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <img id="enjoy" src="<?php echo base_url('')?>image/enjoy.png" height="250px">
            
          </div>

        </section><!-- /.content -->
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