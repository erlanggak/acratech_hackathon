<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $this->load->view('include/head');
    ?>
</head>
    <body class="skin-blue layout-top-nav register-page">
      
        <?php 
          $this->load->view('include/header');
          ?>
<div class="register-box">
    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <form action="<?php echo base_url('')?>register/daftar_anggota" method="post">
          <div class="form-group has-feedback">
            <input required name="nama_lengkap" type="text" value="" class="form-control" placeholder="Full name" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input required name="username" value="" type="text" class="form-control" placeholder="Username" />
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input required name="email" value="" type="email" class="form-control" placeholder="Email" />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div required class="form-group has-feedback">
            <input name="password" value="" type="password" class="form-control" placeholder="Password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox"> I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
        </div>

        <a href="<?php echo base_url('')?>login" class="text-center">I already have a membership</a>
        </div><!-- /.form-box -->
      </div><!-- /.register-box -->

<?php 
          $this->load->view('include/footer')
          ?>
        <!-- Javascript -->
        <script src="<?php echo base_url('')?>dist/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url('')?>dist/js/jquery.min.js"></script>
        <script src="<?php echo base_url('')?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('')?>dist/js/jsscripts.js"></script>
    
        
        <!--[if lt IE 10]>
            <script src="<?php echo base_url('')?>assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>