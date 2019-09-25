<?php require("../php/notLogged.php"); ?>
<?php
if(!$isAdmin)
{
	header("Location: admin.php");
}
require("../php/db.php");
?>
<?php
// this page won't start from here,it will start from page number 76
//where code is if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
function renderForm($id,$firstname,$lastname,$email,$username,$password,$role, $error)
{
?>
<?php
	// if there are any errors, display them
	if ($error != '')
	{
		echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
	}
	?>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		<div>
			<p><strong>ID:</strong> <?php echo $id; ?></p>
			<strong>First name: *</strong> <input type="text" name="firstname" value="<?php echo $firstname; ?>"/><br/>
			<strong>Last name: *</strong> <input type="text" name="lastname" value="<?php echo $lastname; ?>"/><br/>
			<strong>E-mail: *</strong> <input type="text" name="email" value="<?php echo $email; ?>"/><br/>
			<strong>Username: *</strong> <input type="text" name="username" value="<?php echo $username; ?>"/><br/>
			<strong>Password*</strong> <input type="text" name="password" value="<?php echo $password; ?>"/><br/>
			<strong>Role: *</strong> <input type="text" name="role" value="<?php echo $role; ?>"/><br/>
			<p>* Required and Role should be admin or user</p>
			<input type="submit" name="submit" value="Submit">
		</div>
	</form>
<?php
}

// check if the form has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit']))
{
	// confirm that the 'id' value is a valid integer before getting the form data
	if (is_numeric($_POST['id']))
	{
	// get form data, making sure it is valid
	$id = $_POST['id'];
	$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$role = mysqli_real_escape_string($conn,$_POST['role']);
	// check that title/content fields are both filled in
	if ($firstname == '' || $lastname == ''|| $email == ''|| $username == ''|| $password == ''|| $role == '')
	{
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';
		//error, display form
		renderForm($id,$firstname, $lastname,$email,$username,$password,$role, $error);
	}
	else
	{
		// save the data to the database
		mysqli_query($conn,"UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', username='$username', password='$password', role='$role' WHERE id='$id'")
		or die(mysql_error());
		// once saved, redirect back to the view page
		header("Location: admin.php?page=users");
	}
	}
	else
	{
		// if the 'id' isn't valid, display an error
		echo 'Error!';
	}
}
else
// if the form hasn't been submitted, get the data from the db and display the form
{
	// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
	{
		// query db
		$id = $_GET['id'];
		$result = mysqli_query($conn,"SELECT * FROM users WHERE id=$id")
		or die(mysqli_error($conn));
		$row = mysqli_fetch_assoc($result);
		// check that the 'id' matches up with a row in the databse
		if($row)
		{
			// get data from db
			$firstname =$row['firstname'];
			$lastname =$row['lastname'];
			$email =$row['email'];
			$username =$row['username'];
			$password =$row['password'];
			$role =$row['role'];
					// show form
			renderForm($id,$firstname,$lastname,$email,$username,$password,$role, '');
		}
		else
		// if no match, display result
		{
			echo "No results!";
		}
	}
}
?>



