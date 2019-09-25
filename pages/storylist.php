<?php
// Function to create read more link of a content with link to full page
function readMore($content,$link, $limit) {
$content = substr($content,0,$limit);
$content = substr($content,0,strrpos($content,' '));
$content = $content." <a href='$link'>Read More...</a>";
return $content;
}
?> 
<?php
	 include "php/db.php"; 
	$query="SELECT * FROM story ";
	$select_query=mysqli_query($conn,$query) or die(mysqli_errno($conn));
	while($row=mysqli_fetch_assoc($select_query))
	{
		echo "<div style='border: 1px solid green ; padding:2px 6px;'>";
			$firstname=$row['firstname'];
			$lastname=$row['lastname'];
			echo"<h4>";
			echo $firstname." ".$lastname;
			echo"</h4>";
			echo"<p>";
			$content =$row['story'];
			// your page id to display full content
			$id = $row['id'] ;
			// your page file to display full content
			$link = "index.php?page=stories&id=".$id;
			// limit content character
			$limit = 350;
			// Called readMore() function to convert full content to read more link
			if(strlen($content)>$limit)
			{
				echo readMore($content,$link,$limit);
			}
			else
			{
				echo $content;
			}
		echo "</p>";
		echo "</div><br>";
	}
	?>
