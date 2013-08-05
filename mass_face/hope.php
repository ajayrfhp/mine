<?php require_once("includes/connection.php"); ?>
<?php
function mysql_prep($value)
		{
		$magic_quotes_active=get_magic_quotes_gpc();
		$new_enough_php=function_exists("mysql_real_escape_string");
		if($new_enough_php){
			if($magic_quotes_active)
				$value=mysql_real_escape_string($value);
			else
				if(!$magic_quotes_active)
				$value=addslashes($value);
		}
		return $value;
		}
?>
<?php
$view=$_GET['to'];
	$message=$_GET['message'];
	$user=$_GET['from'];
	$user=mysql_prep($user);
	$view=mysql_prep($view);
	$message=mysql_prep($message);
$query="INSERT into new
		(content,rr,sr) VALUES('{$message}','{$view}','{$user}')";
$result=mysql_query($query,$connection);
if($result)
	{
	echo "upload succesful";
	}
else
	{
	echo "error:";
	echo mysql_error();
	}
?>
<?php
if(isset($connection))
mysql_close($connection);
?>