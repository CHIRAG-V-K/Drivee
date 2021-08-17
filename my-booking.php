<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  {
header('location:index.php');
}
else{
?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>CarForYou - Responsive Car Dealer HTML5 Template</title>
<!--Bootstrap -->


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


<!--Header-->
<?php include('includes/header.php');?>
<!--Page Header-->

<section class="page-header profile_page ">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading text-center">
        <h1>My Booking</h1>
      </div>
    </div>
  </div>
</section>

<?php
$useremail=$_SESSION['login'];
$sql = "SELECT * from tblusers where EmailId=:useremail";
$query = $dbh -> prepare($sql);
$query -> bindParam(':useremail',$useremail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
<section class="user_profile inner_pages p-5 ">
  <div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40 text-center">
      <div class="upload_user_logo"> <img src="assets/images/dealer-logo.jpg" alt="image">
      </div>

      <div class="dealer_info text-center">
        <h5><?php echo htmlentities($result->FullName);?></h5>
        <p><?php echo htmlentities($result->Address);?><br>
        <?php echo htmlentities($result->City);?>&nbsp;<?php echo htmlentities($result->Country); }}?></p>
      </div>
    </div>
    <div class="row">
      <div >
       <?php include('includes/sidebar.php');?>

      <div class="text-center">
        <div class="profile_wrap">
          <h5 class="uppercase underline">My Bookings </h5>
          <div class="my_vehicles_list">
            <ul class="vehicle_listing">
<?php
$useremail=$_SESSION['login'];
$sql = "SELECT tblvehicles.Vimage1 as Vimage1,tblvehicles.VehiclesTitle,tblvehicles.id as vid,tblbrands.BrandName,tblbooking.FromDate,tblbooking.ToDate,tblbooking.message,tblbooking.Status  from tblbooking join tblvehicles on tblbooking.VehicleId=tblvehicles.id join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblbooking.userEmail=:useremail";
$query = $dbh -> prepare($sql);
$query-> bindParam(':useremail', $useremail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>

<li>
                <div class="vehicle_img "> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->vid);?>"><img width="500px" height="400px" src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>"  alt="image"></a> </div>
                <div class="vehicle_title">
                <h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->vid);?>"> <?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></a></h6>
                <p><b>From Date:</b> <?php echo htmlentities($result->FromDate);?><br /> <b>To Date:</b> <?php echo htmlentities($result->ToDate);?></p>
                </div>
                <?php if($result->Status==1)
                { ?>
                <div class="vehicle_status"> <a href="#" class="btn btn-secondary">Confirmed</a>
                <div class="clearfix"></div>
        </div>
            <?php } else if($result->Status==2) { ?>
<div class="vehicle_status"> <a href="#" class="btn btn-danger">Cancelled</a>
            <div class="clearfix"></div>
        </div>

                <?php } else { ?>
<div class="vehicle_status"> <a href="#" class="btn btn-warning ">Not Confirm yet</a>
            <div class="clearfix"></div>
        </div>
                <?php } ?>
       <div style="float: left"><p><b>Message:</b> <?php echo htmlentities($result->message);?> </p></div>
            </li>
            <?php }} ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--/my-vehicles-->
<?php include('includes/footer.php');?>
</body>
</html>
<?php } ?>