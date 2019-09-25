<?php require("../php/notLogged.php"); ?>
<?php
require("../php/db.php");
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
	$id = $_GET['id'];
	
	//deleting from storage
	$query=mysqli_query($conn,"SELECT * FROM images WHERE id=$id") or die(mysqli_error($conn));
	$row=mysqli_fetch_assoc($query);
	$oldImage=$row['image'];
	unlink("../uploads/gallery/$oldImage");
	
	//deleting from sql
	$result = mysqli_query($conn,"DELETE FROM images WHERE id=$id")
	or die(mysqli_error($conn));
	header("Location: admin.php?page=viewGallery");
}
else
{
	header("Location: admin.php?page=viewGallery");
}
?>