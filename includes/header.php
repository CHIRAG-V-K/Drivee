
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
          <a class="nav-link"  href="index.php">Home</a>   
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="page.php?type=aboutus">About Us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="page.php?type=faqs">FAQs</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact-us.php">Contact Us</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle" aria-hidden="true">
              
              <?php
                              $email=$_SESSION['login'];
                              $sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
                              $query= $dbh -> prepare($sql);
                              $query-> bindParam(':email', $email, PDO::PARAM_STR);
                              $query-> execute();
                              $results=$query->fetchAll(PDO::FETCH_OBJ);
                              if($query->rowCount() > 0)
                              {
                                foreach($results as $result)
                                {
                                  $_SESSION['na'] =$result->FullName;
                                  echo htmlentities($result->FullName); }}?>
            </i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <?php if($_SESSION['login']){?>
              <a  class="dropdown-item"  href="update-password.php">Update Password</a>
              <a  class="dropdown-item"  href="my-booking.php">My Booking</a>
              <a  class="dropdown-item"  href="post-testimonial.php">Post a Testimonial</a>
              <a  class="dropdown-item"  href="my-testimonials.php">My Testimonial</a>
              <a  class="dropdown-item"  href="lend-my-car.php">Lend My Car</a>
              <a   class="dropdown-item" href="manage-my-car.php">Manage My Car</a>
              <a  class="dropdown-item"  href="logout.php">Sign Out</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="profile.php"><?php  echo htmlentities($_SESSION['na']);?></a>
            </div>
            <?php } else { ?>
              <a  class="dropdown-item"  href="#loginform"  data-toggle="modal" data-dismiss="modal">Log-In</a>
              <?php } ?>
        </li>
      </ul>
      
      <ul class="navbar-nav ">
                
          <?php   if(strlen($_SESSION['login'])==0)
          {
        ?>
        <a href="#loginform" class="btn btn-secondary "data-toggle="modal" data-dismiss="modal">Login / Register</a>
            <?php }?>
      </ul>
</div>
</nav>


