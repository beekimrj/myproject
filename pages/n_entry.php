<?php require("../php/notLogged.php"); ?>
<h3>New Notice</h3>
<form method="post" action="#" id="notice">
	<table border="0">
        <tr> 
			<td><h4>Title</h4></td>
			<td><input type="text" name="title" placeholder="Title for Notice" required></td>
		</tr>
		<tr>
			<td><h4>Full Notice</h4></td>
			<td><textarea name="content" form="notice" placeholder="Full notice" required></textarea></td>
		</tr>
		<tr>
			<td><button type="submit" name="submit">Submit Now</button></td>
			<td><button type="reset" name="reset">Reset all</button></td>
		</tr>
	</table>
</form>
<?php 
include "../php/db.php"; ?>
	<?php
	if(isset($_POST['submit'])) {    
    $title = $_POST['title'];
    $content = $_POST['content'];
	$query="INSERT INTO notice(title,content) VALUES('$title','$content')";
	$select_query= mysqli_query($conn,$query );
		if($select_query)
		{
			echo "Notice has been added successfully";
			header("Location: admin.php?page=Notice");
		}
		else
		{
			echo "Error occured" . mysqli_error('$select_query');
		}
	}
	?>