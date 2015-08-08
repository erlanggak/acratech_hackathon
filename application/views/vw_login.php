<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $this->load->view('include/head');
    ?>
  
</head>
    <body class="skin-blue layout-top-nav login-page">
      
        <?php 
          $this->load->view('include/header')
          ?>

    <div id="login_form" class="login-box" >
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to get more information</p>
        <form  action="<?php echo base_url('')?>login/auth_login" method="post">
          <div class="form-group has-feedback">
            <input name="username" type="username" class="form-control" placeholder="Username" />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input name="password" type="password" class="form-control" placeholder="Password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  &nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="<?php echo base_url('')?>register" class="open_register_form">Register a new membership</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

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