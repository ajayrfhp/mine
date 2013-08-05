<?php
	function redirect_to($location)
	{
	if($location!=NULL)
		{
		header("Location:{$location}");
		exit;
		}
	}
?>
<?php require_once("includes/connection.php");?>
<?php 
	$view=$_GET['to'];
	$message=$_GET['message'];
	$usern=$_GET['from'];
	$usern=mysql_prep($usern);
	$view=mysql_prep($view);
	$message=mysql_prep($message);
	$t=time();
	$x=date("Y-m-d",$t);
		$x=mysql_prep($x);
$query="INSERT into new
		(content,rr,sr,time) VALUES('{$message}','{$view}','{$usern}','{$x}')";

		$result=mysql_query($query,$connection);
	
if($result)
	{
	$query="SELECT * ";
	$query.="FROM users ";
	$query.="WHERE email = '{$usern}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	if(mysql_num_rows($result_set)==1)
			{
			$ab=mysql_fetch_array($result_set);
			$user=$ab['firstname'];
			$user2=$ab['lname'];
			$user4=$ab['dob'];
			$user5=$ab['email'];
			} 
	 redirect_to("search_users.php?user=$user&user2=$user2&user4=$user4&user5=$user5&msg=1");
		
	}
else
	{
	echo "error:";
	echo mysql_error();
	}
	?>
			<?php
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
	}
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
if(isset($connection))
mysql_close($connection);
?>