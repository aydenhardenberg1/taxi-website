//Author: Ayden Hardenberg
//Date: 10 June
//Page: Logout
<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}
 
 
header("Location: login.php");
die;