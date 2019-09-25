<script language="javascript">
	function Validate(){
	var email=document.getElementById("exampleInputEmail1").value;
	var number=document.getElementById("number").value;
	if(email=="" && number=="")
	{
		alert("Please Give us email or number so we can contact you");
		document.getElementById("exampleInputEmail1").focus();
		return false;
	}
	else{
		return true;
	}
	}
</script>	
<div >
<div  class=" mb-3" style="padding: 20px;">
	<?php require("storylist.php"); ?>
</div>
	<div class="bg-secondary" >
		<div class="text-center pt-5">
			<h1>Has your life been transformed?</h1>
			<h3>Let us hear your story.</h3>
		</div>
		<div class="w-50 mx-auto my-4">
			<div class="px-4 py-4">
				<form action="#"  method="post" id="story" onSubmit="return Validate()";>
				<div class="form-group">
					<div class="row">
					<div class="col"><label for="firstname">First name</label>
					<input type="text" class="form-control" name="firstname" placeholder="First name">
					</div>
					<div class="col"><label for="lastname">Last name</label>
					<input type="text" class="form-control" name="lastname" placeholder="Last name">
					</div>
					</div>

					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">

					<label>Contact number</label>
					<input type="number" class="form-control" name="number" id="number" placeholder="number">

					<div class="form-group">
						<label for="exampleFormControlTextarea1">Your story</label>
						<textarea class="form-control" name="content" form="story" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
				</div>
				<button type="submit" name="submit" class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>



<?php 
include "php/db.php"; ?>
	<?php
	if(isset($_POST['submit'])) 
	{    
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$story = $_POST['content'];
		$query="INSERT INTO newstory(firstname,lastname,email,number,story) VALUES('$firstname','$lastname','$email','$number','$story')";
		$select_query= mysqli_query($conn,$query );
			if($select_query)
			{
				echo "Thank you for sharing your story :)";
			}
			else
			{
				echo"<script>alert('hello')</script>";
				echo "Error occured" . mysqli_error('$select_query');
			}
	}
	?>

