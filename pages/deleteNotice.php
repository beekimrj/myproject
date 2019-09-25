<?php require("../php/notLogged.php"); ?>
<?php
require("../php/db.php");
// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
	$id = $_GET['id'];
	$result = mysqli_query($conn,"DELETE FROM notice WHERE id=$id")
	or die(mysqli_error($conn));
	header("Location: admin.php?page=Notice");
}
else
{
	header("Location: admin.php?page=Notice");
}
?>