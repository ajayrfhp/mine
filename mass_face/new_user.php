<?php require_once("includes/connection.php");?>
<?php require_once("functions/functions.php");?>
<?php
if(isset($_POST['submit']))
	{
	$errors=array();
	$required_fields=array('username','password');
	$errors=array_merge($errors,check_required_fields($required_fields));
	$username=trim(mysql_prep($_POST['username']));
	$password=trim(mysql_prep($_POST['password']));
	$hashed_password=md5($password);
	if(empty($errors))
	{
	$query="SELECT *";
	$query.="FROM users ";
	$query.="WHERE email = '{$username}'";
	$query.="WHERE pwd  = '{$hashed_password}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	if(mysql_num_rows($result_set)==1)
		{
		$found_user=mysql_fect_array($result_set);
		echo "yesss";
		}
	else
		{
		echo "user name password combo is not correct";
		}
	}
	else
		{
		echo "error there were error(s) in your emai id ,password";
		}
	}
	else
	{
	$username="";
	$password="";
	}
?>