<?php require("../php/notLogged.php"); ?>
<?php
require("../php/db.php");
?>
<h3>All Images</h3>
<?php
	require("../php/db.php");
	$query="SELECT * FROM images";
	$select_query=mysqli_query($conn,$query);				
	echo "<table border='1'cellspacing='0'>";
	echo "<tr> <th>ID</th> <th>Image</th> <th>About</th><th>Edit</th> <th>Delete</th></tr>";
	while($row=mysqli_fetch_assoc($select_query))
	{
		echo "<tr>";
		echo '<td>' . $row['id'] . '</td>';
		echo "<td> <img width='150px' src='../uploads/gallery/" . $row['image'] . "'></td>";
		echo "<td>" . $row['about'] . "</td>";
		echo "<td><a href='admin.php?page=viewGallery&id=" . $row['id'] ."' >Edit</a></td>";
		echo "<td><a href='deleteGallery.php?id=" . $row['id'] . "'>Delete</a></td>";
		echo "</tr>";
	}
	// close table>
	echo "</table>";
include("addGallery.php");
?>
