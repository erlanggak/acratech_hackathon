<!DOCTYPE html>
<html lang="en">

    <?php 
        $this->load->view('include/head');
    ?>

    <body class="skin-blue layout-top-nav login-page"">
      
        <?php 
          $this->load->view('include/header')
          ?>

    <div id="login_form" class="login-box" >
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to get more information</p>
        <form  action="<?php echo base_url('')?>login/auth_login" method="post">
          <div class="form-group has-feedback">
            <input name="username" type="username" class="form-control" placeholder="username" />
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

        <a href="#">I forgot my password</a><br>
        <a href="#" class="open_register_form">Register a new membership</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
   <div id="register_form" class="register-box" style="display:none">
      <div class="login-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <form  action="../../index.html" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Full name" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Retype password" />
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  &nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox"> I agree to the <a href="#">terms</a>
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

        <a href="#" class="open_login_form text-center">I already have a membership</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->
    

        <!-- Javascript -->
        <script src="<?php echo base_url('')?>dist/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url('')?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('')?>dist/js/jsscripts.js"></script>
    
        <script>
            $(function() {
                // switch forms
                $('.open_register_form').click(function(e) {
                    e.preventDefault();
                    $('#login_form').removeClass().addClass('animated fadeOutDown');
                    setTimeout(function() {
                        $('#login_form').removeClass().hide();
                        $('#register_form').show().addClass('animated fadeInUp');
                    }, 700);
                })
                $('.open_login_form').click(function(e) {
                    e.preventDefault();
                    $('#register_form').removeClass().addClass('animated fadeOutDown');
                    setTimeout(function() {
                        $('#register_form').removeClass().hide();
                        $('#login_form').show().addClass('animated fadeInUp');
                    }, 700);
                })
            })
        </script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>