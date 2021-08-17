<?php 
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental Portal</title>
<!-- Bootstrap CSS -->
 <!-- Bootstrap CSS -->


 <link href="assets/master-css/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

<link href="assets/master-css/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />

<link href="assets/master-css/fontawesome/css/all.css" rel="stylesheet" />

<link href="assets/master-css/Css/custstylesheet.css" rel="stylesheet" />
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<script src="assets/master-css/bootstrap/jquery/jquery-2.1.3.min.js"></script>

<script src="assets/master-css/bootstrap/bootstrapbundle/bootstrap.bundle.min.js"></script>
<script src="assets/master-css/bootstrap/bootstrapbundle/popper.min.js"></script>
<script src="assets/master-css/bootstrap/bootstrapbundle/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body> 

<?php 
include('includes/header.php');
?>




        <!-- <%--  question box one--%> -->
        <div class="section fa-question " id="question">
        <div class="container">
            <div class="row">
              <!-- <%-- single question box--%> -->
                <div class="col-10 mx-auto my-2 col-md-6 d-flex justify-content-between question-grey p-4">
                  <!-- <%-- 1st flex box--%> -->
                    <a href="list-of-cars.php" class="question-icon mr-3">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- <%-- 2nd flex box--%> -->
                    <div class="question-text w-75">
                        <h4 class="question-title text-capitalize font-weight-bold">Are you looking to rent a car?</h4>
                        <p class="question-info">Dont't worry rent a car directly from owner just search car near you contact the owner rent a car enjoy your ride</p>
                    </div>
                </div>
              <!-- <%-- single question box two--%> -->
                <div class="col-10 mx-auto my-2 col-md-6 d-flex justify-content-between question-yellow p-4">
                  <!-- <%-- 1st flex box--%> -->
                    <a href="#" class="question-icon mr-3">
                        <i class="fas fa-rupee-sign fa-fw"></i>
                    </a>
                    <!-- <%-- 2nd flex box--%> -->
                    <div class="question-text w-75">
                        <h4 class="question-title text-capitalize font-weight-bold">Like to Rent your Car?</h4>
                        <p class="question-info">Make money just by staying in home, just  upload your car in our website offer the best price rent out your car </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- START : Home page second section - Our Qualities -->
    <section class="pt-3 pb-4">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h3>
            Why you should Rent here?
          </h3>
          <hr>
        </div>

      </div>
      <div class="row">
        <div class="col-md-4 text-center ">
          <img class="img-fluid  qualities-img  p-5" src="assets/master-css/imgs/Safety.png" alt="">
          <h5>
            Safety
          </h5>
          <p>
            We make sure the car you wish is available for you, with all service up to date.
          </p>
        </div>
        <div class="col-md-4 text-center">
          <img class="img-fluid  qualities-img  p-5" src="assets/master-css/imgs/money-saving.png" alt="">
          <h5>
            Price
          </h5>
          <p>
            We don't charge any brokrage from you, make a deal directly with the owners.
          </p>
        </div>
        <div class="col-md-4 text-center">
          <img class="img-fluid  qualities-img  p-5" src="assets/master-css/imgs/door-with-steps.png" />
          <h5>
            Door Step Service
          </h5>
          <p>
            Contact the owners rent a car and your car will be available at yours doorstep.
          </p>
        </div>
      </div>

          <div class="row">
        <div class="col-md-4 text-center">
          <img class="img-fluid  qualities-img  p-5" src="assets/master-css/imgs/businessman-options-to-choose.png" />
          <h5>
              Variety 
          </h5>
          <p>
              You can choose the variety of car available for you and near from your place.
          </p>
        </div>
        <div class="col-md-4 text-center">
          <img class="img-fluid  qualities-img  p-5" src="assets/master-css/imgs/signpost.png" />
          <h5>
            Options
          </h5>
          <p>
            You can choose only car or you can hire a driver from here.
          </p>
        </div>
        <div class="col-md-4 text-center">
          <img class="img-fluid  qualities-img  p-5" src="assets/master-css/imgs/support.png" alt="">
          <h5>
            Support
          </h5>
          <p>
            We make sure we will avaible and resolve all your quries as soon as possible.
          </p>
        </div>
      </div>


    </div>
  </section>
        <section>
        <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h3>
            Why you should Rent your Car with Us?
          </h3>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 text-center">
          <img class="img-fluid  qualities-img  p-5" src="assets/master-css/imgs/Safety.png" alt="">
          <h5>
            Safety
          </h5>
          <p>
            You can decide who can rent your car, you have the full controll to accept or declain the request.
          </p>
        </div>
        <div class="col-md-4 text-center">
          <img class="img-fluid  qualities-img  p-5" src="assets/master-css/imgs/money.png" alt="">
          <h5>
            Price
          </h5>
          <p>
            You have the rights to offer best price for the customers.
          </p>
        </div>
        <div class="col-md-4 text-center">
          <img class="img-fluid  qualities-img  p-5" src="assets/master-css/imgs/support.png" />
          <h5>
              Support
          </h5>
          <p>
              We make sure we will avaible and resolve all your quries as soon as possible.
          </p>
        </div>
      </div>
    </div>
    </section>
  <!-- END : Home page second section - Our Qualities -->


<!-- Resent Cars-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>CarForYou</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Car</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

<?php $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
?>  
<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><img width="320px" height="250px" src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>"  class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear);?> Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity);?> seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></a></h6>
<span class="price">&#x20B9;<?php echo htmlentities($result->PricePerDay);?> /Day</span> 
</div>
<div class="inventory_info_m">
<p><?php echo substr($result->VehiclesOverview,0,70);?></p>
</div>
</div>
</div>
<?php }}?>

      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat --> 









<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 


<?php
include('includes/footer.php');
?>


</body>
</html>
