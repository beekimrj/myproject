<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$isAdmin=false;
$isUser =false;
$notLogged=true;
if(isset($_SESSION['role']))
{
	$notLogged=false;
	if($_SESSION['role']=='user')
	{
		$isUser=true;
	}
	elseif($_SESSION['role']=='admin'){
		$isAdmin=true;
	}
}
?>