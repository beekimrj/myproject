<?php include "db.php"; ?>
<?php session_start(); ?>
<?php
//	$tbl_name="users";
	if(isset($_POST['submit']))
	{
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		echo $username=mysqli_real_escape_string($conn,$username);
		echo $password=mysqli_real_escape_string($conn,$password);
		
		$query="SELECT * FROM users WHERE username='{$username}'";
		$select_query=mysqli_query($conn, $query);
		if(!$select_query)
		{
			die("query failed ".mysqli_error($conn));
		}
		
		while($row=mysqli_fetch_array($select_query))
		{
			$db_id=$row['id'];
			$db_username=$row['username'];
			$db_password=$row['password'];
			$db_firstname=$row['firstname'];
			$db_lastname=$row['lastname'];
			$db_role=$row['role'];
			
		}
		
		if($db_username!==$username || $db_password!==$password)
		{
			session_destroy();
			header("Location: ../pages/loginhtml.php");
		}
		else
		{	
			$_SESSION['username']=$db_username;
			$_SESSION['password']=$db_password;
			$_SESSION['firstname']=$db_firstname;
			$_SESSION['lastname']=$db_lastname;
			$_SESSION['role']=$db_role;
			
			header("Location: ../pages/admin.php");
		}
	}
?>
