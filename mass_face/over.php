<?php session_start();?>
<?php require_once("includes/connection.php"); ?>
<?php
function redirect_to($location)
	{
	if($location!=NULL)
		{
		header("Location:{$location}");
		exit;
		}
	}
	
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
	}
	
$_SESSION['user_id2']="";
$query="DELETE from tic ";
$query.="WHERE mid1='{$_SESSION['user_id']}' OR mid2='{$_SESSION['user_id']}'";
$result_set=mysql_query($query);
confirm_query($result_set);
$query="UPDATE users ";
$query.="SET status='' WHERE id='{$_SESSION['user_id']}'";
$result_set=mysql_query($query);
confirm_query($result_set);
$query="SELECT * ";
$query.="FROM users WHERE id='{$_SESSION['user_id']}'";
$result_set=mysql_query($query);
confirm_query($result_set);
$found_user=mysql_fetch_array($result_set);
		$found_name=$found_user['firstname'];
		$found_lname=$found_user['lname'];
		$found_dob=$found_user['dob'];
		$found_email=$found_user['email'];
		redirect_to("user_home.php?user=$found_name&user2=$found_lname&user4=$found_dob&user5=$found_email");
?>