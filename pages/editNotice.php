<?php require("../php/notLogged.php"); ?>
<?php
// this page won't start from here,it will start from page number 76
//where code is if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
function renderForm($id, $title, $content, $error)
{
?>

<?php
	// if there are any errors, display them
	if ($error != '')
	{
		echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
	}
	?>
	<form action="" method="post" id="editnotice">
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		<div>
			<p><strong>ID:</strong> <?php echo $id; ?></p>
			<strong>Title: *</strong> <input type="text" name="title" value="<?php echo $title; ?>"/><br/>
			<strong>content: *</strong><br> <textarea name="content" form="editnotice"/><?php echo $content; ?></textarea><br/>
			<p>* Required</p>
			<input type="submit" name="submit" value="Submit">
		</div>
	</form>
<?php
}

// connect to the database

include('../php/db.php');

// check if the form has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit']))
{
	// confirm that the 'id' value is a valid integer before getting the form data
	if (is_numeric($_POST['id']))
	{
	// get form data, making sure it is valid
	$id = $_POST['id'];
	$title = mysqli_real_escape_string($conn,$_POST['title']);
	$content = mysqli_real_escape_string($conn,$_POST['content']);
	// check that title/content fields are both filled in
	if ($title == '' || $content == '')
	{
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';
		//error, display form
		renderForm($id, $title, $content, $error);
	}
	else
	{
		// save the data to the database
		mysqli_query($conn,"UPDATE notice SET title='$title', content='$content' WHERE id='$id'")
		or die(mysql_error());
		// once saved, redirect back to the view page
		header("Location: admin.php?page=Notice");
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
		$result = mysqli_query($conn,"SELECT * FROM notice WHERE id=$id")
		or die(mysqli_error($conn));
		$row = mysqli_fetch_assoc($result);
		// check that the 'id' matches up with a row in the databse
		if($row)
		{
			// get data from db
			$title = $row['title'];
			$content = $row['content'];
			// show form
			renderForm($id, $title, $content, '');
		}
		else
		// if no match, display result
		{
			echo "No results!";
		}
	}
}
?>


