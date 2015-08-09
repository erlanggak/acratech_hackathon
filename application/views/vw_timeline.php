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
              <h1 style="text-align:center">Jangan lupa move on ke tempat lain ya!</h1>
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
                  <i class="fa fa-envelope bg-blue"></i>
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
                  <i class="fa fa-user bg-aqua"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                    <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-comments bg-yellow"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                    <div class="timeline-body">
                      Take me to your leader!
                      Switzerland is small and neutral!
                      We are more like Germany, ambitious and misunderstood!
                    </div>
                    <div class="timeline-footer">
                      <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline time label -->
                <li class="time-label">
                  <span class="bg-green">
                    3 Jan. 2014
                  </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-camera bg-purple"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                    <div class="timeline-body">
                      <img src="http://placehold.it/150x100" alt="..." class="margin" />
                      <img src="http://placehold.it/150x100" alt="..." class="margin" />
                      <img src="http://placehold.it/150x100" alt="..." class="margin" />
                      <img src="http://placehold.it/150x100" alt="..." class="margin" />
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-video-camera bg-maroon"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span>
                    <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>
                    <div class="timeline-body">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="timeline-footer">
                      <a href="#" class="btn btn-xs bg-maroon">See comments</a>
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
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