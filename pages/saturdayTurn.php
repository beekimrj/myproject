<?php require("../php/notLogged.php"); ?>
<?php
if(!$isAdmin)
{
	header("Location: admin.php");
}
require("../php/db.php");
?>

<h2>Current Saturday Turn</h2>
<br>
<?php
	require("../php/db.php");
	$query="SELECT * FROM saturdayturn where id='1'";
	$select_query=mysqli_query($conn,$query);				
	$row=mysqli_fetch_assoc($select_query);
	
	echo"<form method='post' action='' >";
	echo "<table border='0' cellpadding='10'>";
	echo "<tr> <th>Time</th> <th>Leading</th> <th>Preaching</th> <th>Edit</th> </tr>";	
	echo "<tr>";
	echo "<td><input type='text' readonly value='" . $row['time'] . "'></td>";
	echo "<td><input type='text' readonly value='" . $row['lead'] . "'></td>";
	echo "<td><input type='text' readonly value='" . $row['preach']."'></td>";
	echo "<td><a href='admin.php?page=turn&id=1'>Change</a></td>";
	echo "</tr>";
	if(isset($_GET['id']) && $_GET['id']==1)
	{
	echo "<tr colspan=4><td> Change below </td></tr>";
	echo "<tr>";
	echo "<td><input type='text' required name='time' value='" . $row['time'] . "'></td>";
	echo "<td><input type='text' required name='lead' value='" . $row['lead'] . "'></td>";
	echo "<td><input type='text' required name='preach' value='" . $row['preach']."'></td>";
	echo "<td><input type='submit' name='submit' value='Update'><br>
	<a href='admin.php?page=turn'>Cancel</a></td>";
	echo "</tr>";
	}
	echo "</table>";
	echo "</form>";



	if (isset($_POST['submit']))
{
	$time = mysqli_real_escape_string($conn,$_POST['time']);
	$lead = mysqli_real_escape_string($conn,$_POST['lead']);
	$preach = mysqli_real_escape_string($conn,$_POST['preach']);
	
	
	mysqli_query($conn,"UPDATE saturdayturn SET time='$time', lead='$lead',preach='$preach' WHERE id='1'")
	or die(mysqli_error($conn));
	header("Location: admin.php?page=turn");
}
?>
