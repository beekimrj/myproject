<?php require("../php/notLogged.php"); ?>
<h3>All Notices</h3>
<?php
	require("../php/db.php");
	$query="SELECT * FROM notice";
	$select_query=mysqli_query($conn,$query);				
	echo "<table border='1' cellspacing='0'>";
	echo "<tr> <th>ID</th> <th>Title</th> <th>Notice</th> <th>Edit</th> <th>Delete</th></tr>";
	while($row=mysqli_fetch_assoc($select_query))
	{
		echo "<tr>";
		echo '<td>' . $row['id'] . '</td>';
		echo '<td>' . $row['title'] . '</td>';
		echo '<td>' . $row['content'] . '</td>';
		echo '<td><a href="admin.php?page=Notice&id=' . $row['id'] . '">Edit</a></td>';
		echo '<td><a href="deleteNotice.php?id=' . $row['id'] . '">Delete</a></td>';
		echo "</tr>";
	}
	// close table>
	echo "</table>";
include("editNotice.php");
?>
