<header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="<?php echo base_url('')?>" class="navbar-brand"><img src="<?php echo base_url('') ?>image/logo.png" height = "27px"></img></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <?php   
                  if(isset($_SESSION['username']) || isset($_SESSION['password'])){ ?>
                    <li class="active"><a href="<?php echo base_url('')?>logout">Logout <span class="sr-only"></span></a></li>
                    <li><a href="<?php echo base_url('')?>beranda/map">Map</a></li>
                    <li><a href="<?php echo base_url('')?>home/destinasi">Destination Tour</a></li>
                    <li><a href="<?php echo base_url('')?>beranda/aboutus">About Us</a></li>
                  <?php }
                  else{ ?>
                    <li class="active"><a href="<?php echo base_url('')?>login">Login <span class="sr-only"></span></a></li>
                    <li><a href="<?php echo base_url('')?>beranda/map">Map</a></li>
                    <li><a href="<?php echo base_url('')?>beranda/aboutus">About Us</a></li>
                  <?php }
                ?>   
                
                
              </ul>
              
            </div>
            <!--
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <?php /* ?>
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  
                 
                  <!-- User Account Menu -->
                  <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <!-- The user image in the navbar-->
                      <img src="<?php echo base_url('')?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                      <!-- hidden-xs hides the username on small devices so only the image appears. -->
                      <span class="hidden-xs">Administrator</span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- The user image in the menu -->
                      <li class="user-header">
                        <img src="<?php echo base_url('')?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
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
                          <a href="#" class="btn btn-default btn-flat">Log out</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
          <?php */ ?>
        </nav>
      </header>