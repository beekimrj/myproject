<?php require("../php/notLogged.php"); ?>
<?php
function renderForm($id,$firstname,$lastname,$email,$number,$story, $error)
{
?>
<?php
	// if there are any errors, display them
	if ($error != '')
	{
		echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
	}
	?>
	<form action="" method="post" id="editstory">
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		<div>
			<p><strong>ID:</strong> <?php echo $id; ?></p>
			<strong>First name: *</strong> <input type="text" name="firstname" value="<?php echo $firstname; ?>"/><br/>
			<strong>Last name: *</strong> <input type="text" name="lastname" value="<?php echo $lastname; ?>"/><br/>
			<strong>E-mail: *</strong> <input type="email" name="email" value="<?php echo $email; ?>"/><br/>
			<strong>Number: *</strong> <input type="text" name="number" value="<?php echo $number; ?>"/><br/>
			<strong>Story*</strong> <br><textarea name="story" form="editstory"/><?php echo $story; ?></textarea><br/>
			<p>* Required</p>
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
	$number = mysqli_real_escape_string($conn,$_POST['number']);
	$story = mysqli_real_escape_string($conn,$_POST['story']);
	// check that title/content fields are both filled in
	if ($firstname == '' || $lastname == ''|| $email == '' && $number == ''|| $story == '')
	{
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';
		//error, display form
		renderForm($id,$firstname, $lastname,$email,$number,$story, $error);
	}
	else
	{
		// save the data to the database
		mysqli_query($conn,"UPDATE story SET firstname='$firstname', lastname='$lastname', email='$email', number='$number', story='$story' WHERE id=$id")
		or die(mysqli_error($conn));
		
		header("Location: admin.php?page=viewStory");
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
		$result = mysqli_query($conn,"SELECT * FROM story WHERE id=$id")
		or die(mysqli_error($conn));
		$row = mysqli_fetch_assoc($result);
		// check that the 'id' matches up with a row in the databse
		if($row)
		{
			// get data from db
			$firstname =$row['firstname'];
			$lastname =$row['lastname'];
			$email =$row['email'];
			$number =$row['number'];
			$story =$row['story'];
					// show form
			renderForm($id,$firstname,$lastname,$email,$number,$story,'');
		}
		else
		// if no match, display result
		{
			echo "No results!";
		}
	}
}
?>



