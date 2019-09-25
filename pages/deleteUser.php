<?php require("../php/notLogged.php"); ?>
<?php
if(!$isAdmin)
{
	header("Location: admin.php");
}
require("../php/db.php");
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
	$id = $_GET['id'];
	$result = mysqli_query($conn,"DELETE FROM users WHERE id=$id")
	or die(mysqli_error($conn));
	header("Location: admin.php?page=users");
}
else
{
	header("Location: admin.php?page=users");
}
?>