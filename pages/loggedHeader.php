<?php require("../php/notLogged.php"); ?>
<html>
<head>
<meta charset="utf-8">
<title>
<?php  if($isAdmin){echo "CMS-Admin";}elseif($isUser){echo "CMS-User";}?>
</title>	
<link rel="stylesheet" href="../css/php_style.css">

</head>

<body>
	