<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{

echo "<script>alert('Invalid Details');</script>";
}
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

	<title>Car Rental Portal | Admin Login</title>

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

<div class="container">
      <div class="row">
         <div class="col-md-4 p-3 mx-auto">
            <div class="card">
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <center>
                           <img width="130px" src="imgs/User%20pro.png" />
                        </center>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <center>
                           <h3>Admin Login</h3>
                        </center>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <hr>
                     </div>
                  </div>
                  <center>
                  <form method="post">
                     <div class="row">
                        <div class="col">
                           <label>User Name</label>
                           <div class="form-group">
                              <input class="form-control" type="Text" name="username" placeholder="User Name"></input>
                           </div>
                           <label>Password</label>
                           <div class="form-group p-1">
                              <input class="form-control" type="password" name="password" placeholder="Password" TextMode="Password"></input>
                           </div>
                           <div class="form-group p-2">
                              <button type="submit" class="form-control btn btn-secondary" name="login">LOGIN</button>
                           </div>
                        </div>
                     </div>
               </form>
                  </center>
               </div>
            </div>
            <a href="../index.php"><<--Home</a><br><br>
         </div>
      </div>
   </div>

</body>
</html>
