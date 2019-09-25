<?php require("../php/notLogged.php");?>
<h3>All Stories</h3>
<?php
	require("../php/db.php");
	$query="SELECT * FROM story";
	$select_query=mysqli_query($conn,$query);				
	echo "<table border='1' cellspacing='0'>";
	echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th>Email</th> <th>Number</th><th>Story</th><th>Edit</th> <th>Delete</th></tr>";
	while($row=mysqli_fetch_assoc($select_query))
	{
		echo "<tr>";
		echo '<td>' . $row['id'] . '</td>';
		echo '<td>' . $row['firstname'] . '</td>';
		echo '<td>' . $row['lastname'] . '</td>';
		echo '<td>' . $row['email'] . '</td>';
		echo '<td>' . $row['number'] . '</td>';
		echo '<td>' . $row['story'] . '</td>';
		echo '<td><a href="admin.php?page=viewStory&id=' . $row['id'] . '">Edit</a></td>';
		echo '<td><a href="deleteStory.php?page=viewStory&table=story&id=' . $row['id'] . '">Delete</a></td>';
		echo "</tr>";
	}
	// close table>
	echo "</table>";
include("editStory.php");
?>
