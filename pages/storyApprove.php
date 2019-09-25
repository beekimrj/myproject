<?php require("../php/notLogged.php"); ?>
<?php
require("../php/db.php");
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
	$id = $_GET['id'];
	$result = mysqli_query($conn,"INSERT INTO story(firstname,lastname,email,number,story) SELECT firstname,lastname,email,number,story FROM newstory WHERE id=$id")
	or die(mysqli_error($conn));
	header("Location: deleteStory.php?page=newStory&table=newstory&id=$id");
}
else
{
	header("Location: admin.php?page=newStory");
}
	?>