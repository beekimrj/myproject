<?php
	require("php/db.php");
	$query="SELECT * FROM saturdayturn where id='1'";
	$select_query=mysqli_query($conn,$query);				
	$row=mysqli_fetch_assoc($select_query);
?>
<div class="row-fluid"  style="padding-left: 10px">
	<div>
				<h4  class="btn btn-secondary active mt-2">Meet us Saturday</h4><br>
			<b><font color="black" >
				Time: <?php echo $row['time'] ?><br>
				Leading: <?php echo $row['lead'] ?><br>
				Preaching: <?php echo $row['preach'] ?><br>
			</font></b><br><br>
	</div>
	<div>
		<h4 class="btn btn-secondary active">Notices</h4>
        <ul style="list-style: none;">
			<?php include "noticelist.php"; ?>
        </ul>
	</div>               

 </div>