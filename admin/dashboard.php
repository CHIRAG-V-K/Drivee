<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Car Rental Portal | Admin Dashboard</title>

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
    
<?php include('includes/header.php') ?>


<div class="container">

<div class="row  p-3">
<div class="col-list-3 p-3">

  <div class="card col-lg-3" style="width:400px">
    <div class="card-body">
    <?php 
$sql ="SELECT id from tblusers ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$regusers=$query->rowCount();
?>
      <h4 class="card-title">Regular user</h4>
      <h1 class="card-text"><?php echo htmlentities($regusers);?></h1>
      <a href="reg-users.php" class="btn btn-primary">Full Details</a>
    </div>
  </div>
</div>

  <br>
  <div class="col-list-3 p-3">

    <div class="card" style="width:400px ">
      <div class="card-body">
      <?php 
      $sql1 ="SELECT id from tblvehicles ";
$query1 = $dbh -> prepare($sql1);;
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalvehicle=$query1->rowCount();
?>
        <h4 class="card-title">Manage Vehicles</h4>
        <h1 class="card-text"><?php echo htmlentities($totalvehicle);?></h1>
        <a href="manage-vehicles.php" class="btn btn-primary">Full Details</a>
      </div>
    </div>
  </div>
    <br>
    <div class="col-list-3 p-3">

      <div class="card" style="width:400px">
        <div class="card-body">
        <?php 
$sql2 ="SELECT id from tblbooking ";
$query2= $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$bookings=$query2->rowCount();
?>

          <h4 class="card-title">Manage Bookings</h4>
          <h1 class="card-text"><?php echo htmlentities($bookings);?></h1>
          <a href="manage-bookings.php" class="btn btn-primary">Full Details</a>
        </div>
      </div>
    </div>
      <br>
      <div class="col-list-3 p-3">

        <div class="card" style="width:400px">
          <div class="card-body">
          <?php 
$sql3 ="SELECT id from tblbrands ";
$query3= $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$brands=$query3->rowCount();
?>	
            <h4 class="card-title">Brands List</h4>
            <h1 class="card-text"><?php echo htmlentities($brands);?></h1>
            <a href="manage-brands.php" class="btn btn-primary">Full Details</a>
          </div>
        </div>
      </div>
<br>
<div class="col-list-3 p-3">

  <div class="card" style="width:400px">
    <div class="card-body">
    <?php 
$sql4 ="SELECT id from tblsubscribers ";
$query4 = $dbh -> prepare($sql4);
$query4->execute();
$results4=$query4->fetchAll(PDO::FETCH_OBJ);
$subscribers=$query4->rowCount();
?>
      <h4 class="card-title">Manage Subscribers</h4>
      <h1 class="card-text"><?php echo htmlentities($subscribers);?></h1>
      <a href="manage-subscribers.php" class="btn btn-primary">Full Details</a>
    </div>
  </div>
</div>
<br>
<div class="col-list-3 p-3">

  <div class="card" style="width:400px">
    <div class="card-body">
      <?php
    $sql6 ="SELECT id from tblcontactusquery ";
$query6 = $dbh -> prepare($sql6);;
$query6->execute();
$results6=$query6->fetchAll(PDO::FETCH_OBJ);
$query=$query6->rowCount();
?>
      <h4 class="card-title">Manage Queries</h4>
      <h1 class="card-text"><?php echo htmlentities($query);?></h1>
      <a href="manage-conactusquery.php" class="btn btn-primary">Full Details</a>
    </div>
  </div>
</div>
  <br>
  
  <div class="col-list-3 p-3">

    <div class="card" style="width:400px">
      <div class="card-body">
      <?php 
$sql5 ="SELECT id from tbltestimonial ";
$query5= $dbh -> prepare($sql5);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$testimonials=$query5->rowCount();
?>
        <h4 class="card-title">Manage Testimonials</h4>
        <h1 class="card-text"><?php echo htmlentities($testimonials);?></h1>
        <a href="testimonials.php" class="btn btn-primary">Full Details</a>
      </div>
    </div>
  </div>
<br>

</div>
</div>



</body>
</html>
<?php } ?>