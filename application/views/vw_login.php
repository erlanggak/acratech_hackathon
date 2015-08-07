<!DOCTYPE html>
<html lang="en">

    <?php 
        $this->load->view('include/head');
    ?>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Jakarta Tourism</strong> Login Form</h1>
                            <div class="description">
                            	<p>
	                            	This is website for Jakarta tourism and culture.
	                            	Presented by Acratech - Asian Creative Technology
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <form id="login_form" action="<?php echo base_url('')?>login/auth_login" method="post">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input value="" type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input value="" type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button>
			                   
		                    </div>
							<div>
								<p>You don't have an account? <a href="#" class="open_register_form">Sign up here</a></p>
							</div>
                        </div>
                    </form>
                    <form id="register_form" style="display: none">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Sign up for free!!!</h3>
                                    <p>Fill in the blank :p:</p>
                                </div>
                                <div class="form-top-right">
                                    
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-email">Email</label>
                                        <input type="text" name="form-email" placeholder="Email..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" class="btn">Sign Up!</button>
                                </form> 
                            </div>
                            <div>
                                <a href="#" class="open_login_form">Back to login page</a>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or login with:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url('')?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url('')?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('')?>assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url('')?>assets/js/scripts.js"></script>
    
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