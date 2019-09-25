<?php require("../php/notLogged.php"); ?>
<?php
if(!$isAdmin)
{
	header("Location: admin.php");
}
require("../php/db.php");

?>
<?php include "../php/db.php"; ?>
<form method="post" action="#" id="adduser" onSubmit="return Validation();">
	<fieldset>
		<legend>Personal information:</legend>
		First name:<br>
		<input type="text" name="firstname" required><br>
		Last name:<br>
		<input type="text" name="lastname" required><br>
		E-mail:<br>
		<input type="email" name="email" required><br>
		Username:<br>
		<input type="text" name="username" required><br>
		Password:<br>
		<input type="password" name="password" id="psw" required><br>
		Confirm Password:<br>
		<input type="password" name="repassword" id="rpsw" required><br>
		<br>
		<button type="submit" name="submit">Submit now</button>
	</fieldset>
</form>

<script language="javascript">
	function Validation()
	{
		var pass=document.getElementById("psw").value;
		var repass=document.getElementById("rpsw").value;
		if(repass!==pass)
			{
				alert("password and confirm password isn't same");
				document.getElementById("psw").focus();
				return false;
			}
		else
			{
				return true;
			}
	}
</script>
	<?php
	if(isset($_POST['submit'])) {    
    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
    $username = $_POST['username'];
	$password = $_POST['password'];
	$user = $_POST['username'];
  	$usernamecheck=mysqli_query($conn,"SELECT username FROM users WHERE userName='$username'");
		if(mysqli_num_rows($usernamecheck)>=1)
		{
			echo "<font color='red'>".$username." is already taken</font>";
		}else{
				$query="INSERT INTO users(firstname,lastname,email,username,password) VALUES('$firstname','$lastname','$email','$username','$password')";
				$select_query= mysqli_query($conn,$query );
					if($select_query)
					{
						echo "User has been added successfully";
						header("Location: admin.php?page=users");
					}
					else
					{
						echo "Error occured" . mysqli_error('$select_query');
					}
	}
	}
	?>
