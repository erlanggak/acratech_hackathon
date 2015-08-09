<style type="text/css">
.navbar-brand {
  padding-top: 0;

}
img#logo {
  
}
</style>
<header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <?php 
              if(isset($_SESSION['username']) || isset($_SESSION['password'])){ ?>
                <a href="<?php echo base_url('')?>home" class="navbar-brand"><img id="logo" src="<?php echo base_url('') ?>image/logo.png"></img></a>
              <?php } else { ?>
                <a href="<?php echo base_url('')?>" class="navbar-brand"><img src="<?php echo base_url('') ?>image/logo.png"></img></a>
              <?php } ?>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <?php   
                  if(isset($_SESSION['username']) || isset($_SESSION['password'])){ ?>
                    <li><a href="<?php echo base_url('')?>beranda/map">Find Places</a></li>
                    <li><a href="<?php echo base_url('')?>home/timeline">Timeline</a></li>
                    <li><a href="<?php echo base_url('')?>home/destinasi">Destinations</a></li>
                    <li><a href="<?php echo base_url('')?>beranda/aboutus">About Us</a></li>
                  <?php }
                  else{ ?>
                    
                    
                  <?php }
                ?>   
                
                
              </ul>
              
            </div>
          
            <!--
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <?php   
                  if(isset($_SESSION['username']) || isset($_SESSION['password'])){ ?>
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  
                 
                  <!-- User Account Menu -->
                  <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <!-- The user image in the navbar-->
                      <img src="<?php echo base_url('')?>image/user.jpg" class="user-image" alt="User Image" />
                      <!-- hidden-xs hides the username on small devices so only the image appears. -->
                      <span class="hidden-xs"><?php echo $_SESSION['username']?></span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- The user image in the menu -->
                      <li class="user-header">
                        <img src="<?php echo base_url('')?>image/user.jpg" class="img-circle" alt="User Image" />
                        <p>
                          Administrator
                          <small>Member since Nov. 2012</small>
                        </p>
                      </li>
                      
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                          <a href="<?php echo base_url('') ?>logout" class="btn btn-default btn-flat">Log out</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
          <?php } ?>
        </nav>
      </header>