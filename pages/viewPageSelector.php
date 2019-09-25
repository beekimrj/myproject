<?php
	switch($page)
	{
		case "gallery":
			require("gallery.php");
			break;
		case "stories":
			require("stories.php");
			break;
		default:
			require("indexview.php");
	}
