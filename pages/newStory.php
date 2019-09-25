<?php require("../php/notLogged.php"); ?>
<h3>All New Story Requests</h3>
<?php
	require("../php/db.php");
	$query="SELECT * FROM newstory";
	$select_query=mysqli_query($conn,$query);				
	echo "<table border='1' cellspacing='0'>";
	echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th>Email</th> <th>Contact Number</th><th>Story</th><th>Approve</th> <th>Disapprove</th></tr>";
	while($row=mysqli_fetch_assoc($select_query))
	{
		echo "<tr>";
		echo '<td>' . $row['id'] . '</td>';
		echo '<td>' . $row['firstname'] . '</td>';
		echo '<td>' . $row['lastname'] . '</td>';
		echo '<td>' . $row['email'] . '</td>';
		echo '<td>' . $row['number'] . '</td>';
		echo '<td>' . $row['story'] . '</td>';
		echo '<td><a href="storyApprove.php?id=' . $row['id'] . '">Approve</a></td>';
		echo '<td><a href="deleteStory.php?page=newStory&table=newstory&id=' . $row['id'] . '">Disapprove</a></td>';
		echo "</tr>";
	}
	// close table>
	echo "</table>";
?>
