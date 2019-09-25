 <?php
	 include "php/db.php"; 
	$query="SELECT * FROM notice";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($select_query))
	{
		$title=$row['title'];
		echo "<li><u><a style='color:black;' href='index.php?page=notice&id=" . $row['id'] . "'>".$title."</a></u></li>";
	}
	?>
