<?php
	session_start();
	function logged_in(){
	return isset($_SESSION['user_id']);
	}
	function confirm_logged_in(){
	if(!logged_in()){
	redirect_tonew("index.php");
	}
	}
	function redirect_tonew($location)
	{
	if($location!=NULL)
		{
		header("Location:{$location}");
		exit;
		}
	}
?>
