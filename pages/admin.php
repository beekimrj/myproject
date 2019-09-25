<?php
require("loggedHeader.php");
?>
	<div class="topbar">
		<center>
			<h3>Welcome <?php echo "{$_SESSION['firstname']}" ?></h3>
		</center>
	</div>
	
	<div class="container">
		<?php
				require("mySidenav.php");
		?>
		<div class="rightpanel">
			<?php
				if(isset($_GET["page"]))
				{
					$page=$_GET["page"];
					require("pageSelector.php");
				}
			?>
			
		</div>
	</div>

<?php
require("footer.php");
	?> 