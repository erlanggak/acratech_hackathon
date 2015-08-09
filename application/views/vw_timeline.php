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
      <div class="content-wrapper">
        <section class="content">

          <!-- row -->
          <div class="row">
            <div class="col-md-12">
              <h1 style="text-align:center">Jangan lupa move on ke tempat lain ya! :)</h1>
              <!-- The time line -->
              <ul class="timeline">
                <!-- timeline time label -->
                <li class="time-label">
                  <span class="bg-red">
                    <?php $today = date("l, d F Y");              
echo $today; ?>
                  </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-user bg-aqua"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
                    <div class="timeline-body">
                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                      weebly ning heekya handango imeem plugg dopplr jibjab, movity
                      jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                      quora plaxo ideeli hulu weebly balihoo...
                    </div>
                    <div class="timeline-footer">
                      <a class="btn btn-primary btn-xs">Read more</a>
                      <a class="btn btn-danger btn-xs">Delete</a>
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                
                <li>
                  <i class="fa fa-clock-o bg-gray"></i>
                </li>
              </ul>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section>
      </div>
      <?php 
          $this->load->view('include/footer')
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
    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url('')?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('')?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>