<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from tblbrands  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$msg="Page data updated  successfully";

}



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
	
	<title>Car Rental Portal |Admin Manage testimonials   </title>

	<!-- Bootstrap CSS -->


    <link href="assets/master-css/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/master-css/bootstrap/css/bootstrap.min.css">
    
	<link rel="stylesheet" href="assets/master-css/datatables/css/jquery.dataTables.bootstrap.min.css">

    <link href="assets/master-css/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />

    <link href="assets/master-css/fontawesome/css/all.css" rel="stylesheet" />

    <link href="assets/master-css/Css/custstylesheet.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    	<!-- Bootstrap Datatables -->

    <script src="assets/master-css/bootstrap/jquery/jquery-2.1.3.min.js"></script>

    <script src="assets/master-css/bootstrap/bootstrapbundle/bootstrap.bundle.min.js"></script>
    <script src="assets/master-css/bootstrap/bootstrapbundle/popper.min.js"></script>
    <script src="assets/master-css/bootstrap/bootstrapbundle/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    </head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title text-center p-3">Registered Users</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading fw-bolder p-3">Reg Users</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
												<th> Name</th>
											<th>Email </th>
											<th>Contact no</th>
										<th>DOB</th>
										<th>Address</th>
										<th>City</th>
										<th>Country</th>
										<th>Reg Date</th>
										
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
											<th> Name</th>
											<th>Email </th>
											<th>Contact no</th>
										<th>DOB</th>
										<th>Address</th>
										<th>City</th>
										<th>Country</th>
										<th>Reg Date</th>
										</tr>
										</tr>
									</tfoot>
									<tbody>

									<?php $sql = "SELECT * from  tblusers ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->FullName);?></td>
											<td><?php echo htmlentities($result->EmailId);?></td>
											<td><?php echo htmlentities($result->ContactNo);?></td>
	<td><?php echo htmlentities($result->dob);?></td>
											<td><?php echo htmlentities($result->Address);?></td>
											<td><?php echo htmlentities($result->City);?></td>
											<td><?php echo htmlentities($result->Country);?></td>
											<td><?php echo htmlentities($result->RegDate);?></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>

						

							</div>
						</div>

					

					</div>
				</div>

			</div>
		</div>
	</div>

    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>
<?php } ?>