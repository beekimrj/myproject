<?php
	require("php/db.php");
	$id=$_GET['id'];
	$query="SELECT * FROM notice where id='$id'";
	$select_query=mysqli_query($conn,$query);				
	$row=mysqli_fetch_assoc($select_query);

	echo"<div class='card mx-auto my-5 bg-light mb-3' style='max-width: 50rem;'>";
		echo"<div class='card-body'>";
			echo" <h4 class='card-title text-center'>". $row['title'] ."</h4>";
			echo" <p class='card-text'>". $row['content'] ."</p>";
		echo"  </div>";
	echo"</div>";
?>