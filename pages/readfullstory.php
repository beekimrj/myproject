<?php
	require("php/db.php");
	$id=$_GET['id'];
	$query="SELECT * FROM story where id='$id'";
	$select_query=mysqli_query($conn,$query);				
	$row=mysqli_fetch_assoc($select_query);


	$firstname=$row['firstname'];
	$lastname=$row['lastname'];
	$content=$row['story'];
	echo "<div class='card-columns' style='width: 210rem;'>";
		echo "<div class='card bg-light mb-3'>";
			echo "<div class='card-body'>";
				echo "<h5 class='card-title'>".$firstname." ".$lastname."</h5>";
				echo"<p class='card-text'>". $content."</p> <br> <br>";
			echo"</div>";
		echo"</div>";
echo "</div>";	
	echo"<a href='index.php?page=stories' class='btn btn-primary'> Read other stories </a>";

?>