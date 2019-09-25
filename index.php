<?php require("pages/header.php"); ?>
		<div class="row no-gutters min-vh-100">
			<div class="col-10 container-fluid"  >
			<?php
				if(isset($_GET['page']) &&$_GET['page']=="notice" && isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
				{
					require("pages/notice.php");
				}
				elseif(isset($_GET['page']) &&$_GET['page']=="stories" && isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
				{
					require("pages/readfullstory.php");
				}
				elseif(isset($_GET["page"]))
				{
					$page=$_GET["page"];
					require("pages/viewPageSelector.php");
				}else
				{
					require("pages/indexview.php");
				}
			?>
			</div>
            <div class="col-2" style="background-color: #BAD29F;">
			<?php require "pages/sidebar.php"; ?>
			</div>         
	</div>

		<?php include "pages/footer.php" ?>
</body>
</html>