<?php
require("php/db.php");
$query="SELECT * FROM images";
$result_query=mysqli_query($conn,$query);
if($result_query)
{
	$count=1;
//	$number=mysqli_num_rows($result_query);
	echo "<div class='card-deck w-100 mx-auto my-3'>";
//	echo "<div class='card-columns'>";

	while($row=mysqli_fetch_assoc($result_query))
	{
		if($count%4==0)
		{
			echo "</div>";
			echo "<div class='card-deck w-100 mx-auto my-3'>";
			$count=1;
			
		}
	echo "<div class='card'>";
		//echo $row['image'];
		echo "<img class='card-img-top' alt='No Image' src='uploads/gallery/".$row['image']."' > ";
		echo "<div class='card-body'>";
			echo "<h5 class='card-title'>".$row['about']."</h5>";
		echo "</div>";
	echo "</div>";
		$count++;
	}	
	echo "</div>";
}
else
{
	echo"error occured".mysqli_error($result_query);
}
?>