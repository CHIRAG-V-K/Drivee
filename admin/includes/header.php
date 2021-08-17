
	
<nav class="navbar navbar-expand-lg navbar-dark  p-2">
    
    <a class="navbar-brand" href="index.php">
      <img src="assets/master-css/imgs/Logo.jfif" width="50" height="50" class="d-inline-block align-center" alt="">
      Driivee
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        
        <li class="nav-item active">
          <a class="nav-link"  href="../index.php">Home</a>   
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../page.php?type=aboutus">About Us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../page.php?type=faqs">FAQs</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../contact-us.php">Contact Us</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle" aria-hidden="true">
              ADMIN
            </i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <?php if($_SESSION['alogin']){?>
				&nbsp;&nbsp;&nbsp;
				<a href="#"> <img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt="admin"></a>

			  <a class="dropdown-item"  href="dashboard.php">Dashboard</a>
			  <a class="dropdown-item"  href="change-password.php">Change Password</a>
              <a  class="dropdown-item"  href="logout.php">Sign Out</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="update-contactinfo.php">Admin</a>
            </div>
            <?php } else { ?>
              <a  class="dropdown-item"  href="#loginform"  data-toggle="modal" data-dismiss="modal">Log-In</a>
              
              <?php } ?>
        </li>

        <!-- another dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              CREATE
            
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <?php if($_SESSION['alogin']){?>
			  <a class="dropdown-item"  href="create-brand.php">Brand</a>
			  <a class="dropdown-item"  href="post-avehical.php">Post a Vehicle</a>
              
            </div>
            <?php } else { ?>
                          <a href="#">Oops</a>              
              <?php } ?>
        </li>

      </ul>
</div>
</nav>


