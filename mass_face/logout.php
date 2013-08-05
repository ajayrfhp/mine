<?php require_once("functions/functions.php");
?>
<?php

	session_start();
	$_SESSION =array();
	if(isset($_COOKIE[session_name()]))
		{
		setcookie(session_name(),'',time()-42000,'/');
		}
	session_destroy();
	redirect_to("index.php");
function redirect_to($location)
	{
	if($location!=NULL)
		{
		header("Location:{$location}");
		exit;
		}
	}

?>