<?php
	require("../php/loginStat.php");
	if($notLogged)
	{
?>
<!doctype html>
<!DOCTYPE html>
<html>
<head>
  	<title>Login</title>
  		
<link href="../css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
<!--	<link rel="stylesheet" type="text/css" href="css/style.css">-->
<link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap/bootstrap-grid.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap/bootstrap-reboot.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap/bootstrap-reboot.min.css" rel="stylesheet" type="text/css">


</head>
<body>
  	<div class="w-50 mx-auto my-4 card text-white bg-secondary">
  		<div class="px-4 py-4">
		  <form action="../php/login.php" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Username</label>
		    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
		  </div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			  
			  <a href="../index.php" name="cancel" class="btn btn-danger" style="float: right">Cancel</a>
		</form>
    </div>
    </div>

</body>
</html>
<?php
	}
else
{
	header("Location: admin.php");
	
}

?>