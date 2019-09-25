<?php
$host="localhost";
$uname="root";
$psw="";
$db_name="shanti_jeewan";

$conn=mysqli_connect("$host","$uname","$psw");
mysqli_select_db($conn,$db_name) or die("cannot select DB");
//if($conn){
//	echo "successfuly connected ";
//}
?>