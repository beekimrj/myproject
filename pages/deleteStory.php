<?php require("../php/notLogged.php"); ?>
<?php
require("../php/db.php");
$page_name=$_GET['page'];
$table_name=$_GET['table'];
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
	$id = $_GET['id'];
	$result = mysqli_query($conn,"DELETE FROM $table_name WHERE id=$id")
	or die(mysqli_error($conn));
	header("Location: admin.php?page=$page_name");
}
else
{
	header("Location: admin.php?page=$page_name");
}
?>