<?php
	require("../php/notLogged.php"); 

	//for add gallery
	if($_GET['page']=="addGallery")
	{
		echo"<h2> Add Images </h2>";
?>
<form id="gallery" action="#" method=post enctype="multipart/form-data">
	Choose Photo:<br>
	<input type="file" name="image" required><br>
	About Photo:<br>
	<textarea form="gallery" name="aboutPic" placeholder="Type here about picture" required></textarea>
	<br>
	<button type="submit" name="submit">Submit</button>
</form>

<?php
	} //for edit gallery,will start from line 127
elseif($_GET['page']=="viewGallery")
{
	function renderForm($id,$aboutPic, $error)
	{

		// if there are any errors, display them
		if ($error != '')
		{
			echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
		}
		?>
		<form action="" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $id; ?>"/>
			<div>
				<p><strong>ID:</strong> <?php echo $id; ?></p>
				<strong>New Image Location: *</strong> <input type="file" name="image" /><br/>
				<strong>About: *</strong> <input type="text" name="aboutPic" value="<?php echo $aboutPic; ?>" required/><br/>
				<p>* Required</p>
				<input type="submit" name="submit" value="Submit">
			</div>
		</form>
	<?php
	}
}

//actual Uploading
 if(isset($_POST['submit']))
 {
	require("../php/db.php");
	//get values from form
	$aboutPic=mysqli_real_escape_string($conn,$_POST['aboutPic']);
    $imageName= $_FILES['image']['name'];  
	 
	if($imageName=='') //only possible when we edit the pic because image upload is required in addGallery
	{
		$id = $_GET['id'];
		mysqli_query($conn,"UPDATE images SET about='$aboutPic' WHERE id='$id'") or die(mysql_error());
		header("Location: admin.php?page=viewGallery");
	}
	 else
	 {
		$imageType= $_FILES['image']['type'];
		$imageError= $_FILES['image']['error'];
		$name= $_FILES['image']['name'];
		// print_r($image);  //prints detail about image like name,size,type,location etc
	   // echo $imageName;
		 $tempName  = $_FILES['image']['tmp_name'];  

		$imageinfo=pathinfo($imageName);
		$imageExt=$imageinfo['extension'];
		$imageActualExt=strtolower($imageExt);
	//	$imageNameOnly= basename($imageName,".".$imageExt);
	//	$imageName=$imageNameOnly.".".$imageActualExt;  //image name with lowercase extension

		$allowed =array('jpg','jpeg','png');
		$saveLocation = '../uploads/gallery/';  

		if(isset($imageName))
		{
			if(!$imageError)
			{
				if(in_array($imageActualExt,$allowed))
				{

					if(move_uploaded_file($tempName, $saveLocation.$imageName))
					{	
						if($_GET['page']=="viewGallery") //we have to just update old file
						{
							$id = $_GET['id'];
							$row=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM images WHERE id=$id")); //getting name old photo to delte
							$oldImage=$row['image'];
							if($oldImage!=$imageName) //else it will delete the uploaded photo with same name
							{
								unlink("../uploads/gallery/$oldImage");
							}
							//updating new pic
							mysqli_query($conn,"UPDATE images SET image='$imageName', about='$aboutPic' WHERE id='$id'") or die(mysql_error());
							header("Location: admin.php?page=viewGallery");
						}
						else
						{
						$query="INSERT INTO images(about,image) VALUES ('$aboutPic','$imageName')";
						}
						$run_query=mysqli_query($conn,$query);
						if(!$run_query)
						{
							echo "failed" . mysqli_error('$run_query');
						}
						echo 'image uploaded successfully';
					}
				}
				else
				{
					echo "you are not allowed to upload  '".$imageActualExt."' type of image";
				}
			}
			else
			{
				echo("there was an error while uploading");
			}
		}  
		else 
		{
			echo 'You should select a image to upload !!';
		}
	 }
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
	{
		// query db
		$id = $_GET['id'];
		$result = mysqli_query($conn,"SELECT * FROM images WHERE id=$id")
		or die(mysqli_error($conn));
		$row = mysqli_fetch_assoc($result);
		// check that the 'id' matches up with a row in the databse
		if($row)
		{
			// get data from db

			$image = $row['image'];
			$aboutPic = $row['about'];
			// show form
			renderForm($id,$aboutPic, '');
		}
		else
		// if no match, display result
		{
			echo "No results!";
		}
	}

?>