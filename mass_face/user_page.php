<?php require_once("includes/session.php");?>
<?php require_once("includes/connection.php");?>
<?php require_once("functions/functions.php");?>
<?
	function redirect_to($location)
	{
	if($location!=NULL)
		{
		header("Location:{$location}");
		exit;
		}
	}
?>
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
	$query="SELECT * ";
	$query.="FROM users ";
	$query.="WHERE email = '{$username}' ";
	$query.="AND pwd = '{$hashed_password}' ";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	if(mysql_num_rows($result_set)==1)
		{
		$found_user=mysql_fetch_array($result_set);
		$found_name=$found_user['firstname'];
		$found_name=urlencode($found_name);
		$found_lname=$found_user['lname'];
		$found_lname=urlencode($found_lname);
		$found_pwd=$found_user['pwd'];
		$found_pwd=urlencode($found_pwd);
		$found_dob=$found_user['dob'];
		$found_dob=urlencode($found_dob);
		$found_email=$found_user['email'];
		$found_email=urlencode($found_email);
		$_SESSION['user_id']=$found_user['id'];
		redirect_to("user_home.php?user=$found_name&user2=$found_lname&user3=$found_pwd&user4=$found_dob&user5=$found_email");
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