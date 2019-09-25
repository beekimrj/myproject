<div id="mySidenav" class="sidenav">
	<?php if($isAdmin)
	{ ?>
	<a href="admin.php?page=users">Users</a>
	<a href="admin.php?page=newUser">Add New User</a>
	<a href="admin.php?page=turn">Saturday Turn</a>
	<?php } ?>
	<a href="admin.php?page=addNotice">Add Notice</a>
	<a href="admin.php?page=Notice">View Notice</a>
	<a href="admin.php?page=viewGallery">View Gallery</a>
	<a href="admin.php?page=addGallery">Add Gallery</a>
	<a href="admin.php?page=viewStory">View Story</a>
	<a href="admin.php?page=newStory">New Story Request</a>
	<a href="../php/logout.php">Logout</a>
</div>