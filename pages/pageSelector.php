<?php require("../php/notLogged.php"); ?>
<?php
switch($page)
{
	case "users":
		require("userlist.php");
		break;
	case "newUser":
		require("newUser.php");
		break;
	case "turn":
		require("saturdayTurn.php");
		break;
	case "Notice":
		require("adminNoticeView.php");
		break;
	case "addNotice":
		require("n_entry.php");
		break;
	case "addGallery":
		require("addGallery.php");
		break;
	case "viewGallery":
		require("viewGallery.php");
		break;
	case "viewStory":
		require("adminStoryView.php");
		break;
	case "newStory":
		require("newStory.php");
		break;
	
	default:
		echo "Can't find requested page";
}

