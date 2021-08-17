<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
// Code for change password	
if(isset($_POST['submit']))
{
$address=$_POST['address'];
$email=$_POST['email'];	
$contactno=$_POST['contactno'];
$sql="update tblcontactusinfo set Address=:address,EmailId=:email,ContactNo=:contactno";
$query = $dbh->prepare($sql);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->execute();
$msg="Info Updateed successfully";
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
	
	<title>Car Rental Portal | Admin Create Brand</title>
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

<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div >
					
						<h2 class="page-title text-center p-3">Update Contact Info</h2>

						<div class="row">
							<div >
								<div class="panel panel-default">
									<div class="panel-heading fw-bolder">Form fields</div>
									<div class="panel-body">
										<form method="post" name="chngpwd" class="form-horizontal" onSubmit="return valid();">
										
											
  	        	  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
				<?php $sql = "SELECT * from  tblcontactusinfo ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	

				<div class="form-group">
												<label class="col-sm-4 control-label"> Address</label>
												<div>
													<textarea class="form-control" name="address" id="address" required><?php echo htmlentities($result->Address);?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label"> Email id</label>
												<div>
													<input type="email" class="form-control" name="email" id="email" value="<?php echo htmlentities($result->EmailId);?>" required>
												</div>
											</div>
<div class="form-group">
												<label class="col-sm-4 control-label"> Contact Number </label>
												<div>
													<input type="text" class="form-control" value="<?php echo htmlentities($result->ContactNo);?>" name="contactno" id="contactno" required>
												</div>
											</div>
<?php }} ?>
											<div class="hr-dashed"></div>
											
										
								
											
											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4 pt-2">
								
													<button class="btn btn-primary " name="submit" type="submit">Update</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
							
						</div>
						
					

					</div>
				</div>
				
			
			</div>
		</div>
	</div>
    
</body>

</html>
<?php } ?>