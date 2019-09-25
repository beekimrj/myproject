<?php require("../php/notLogged.php"); ?>
<?php
if(!$isAdmin)
{
	header("Location: admin.php");
}
require("../php/db.php");
?>
<h3>All Users</h3>
<?php
	require("../php/db.php");
	$query="SELECT * FROM users";
	$select_query=mysqli_query($conn,$query);				
	echo "<table border='1' cellspacing='0' cellpadding='20'>";
	echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th>Email</th> <th>Username</th><th>Password</th><th>Role</th> <th>Edit</th> <th>Delete</th></tr>";
	while($row=mysqli_fetch_assoc($select_query))
	{
		echo "<tr>";
		echo '<td>' . $row['id'] . '</td>';
		echo '<td>' . $row['firstname'] . '</td>';
		echo '<td>' . $row['lastname'] . '</td>';
		echo '<td>' . $row['email'] . '</td>';
		echo '<td>' . $row['username'] . '</td>';
		echo '<td>' . $row['password'] . '</td>';
		echo '<td>' . $row['role'] . '</td>';
		echo '<td><a href="admin.php?page=users&id=' . $row['id'] . '">Edit</a></td>';
		echo '<td><a href="deleteUser.php?id=' . $row['id'] . '">Delete</a></td>';
		echo "</tr>";
	}
	// close table>
	echo "</table>";
include("editUser.php");
?>
