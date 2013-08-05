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
if(isset($_POST['update']))
{
$fname=mysql_prep($_POST['ufname']);
$lname=mysql_prep($_POST['ulname']);
$dob=mysql_prep($_POST['udob']);
$email=mysql_prep($_POST['uemail']);
$pwd=md5(mysql_prep($_POST['upwd']));
$gender=mysql_prep($_POST['ugender']);
/*echo $gender;
echo $fname;
echo $lname;
echo $email;
echo $dob;
echo $pwd;*/
$query="UPDATE users SET
		firstname = '{$fname}',
		lname = '{$lname}',
		dob = '{$dob}',
		pwd='{$pwd}'
		WHERE email = '{$email}'";

	$result=mysql_query($query,$connection);
$fname=urlencode($fname);
$lname=urlencode($lname);
$dob=urlencode($dob);
$email=urlencode($email);
if(mysql_affected_rows()==1)
	{
	redirect_to("user_home.php?user=$fname&user2=$lname&user4=$dob&user5=$email");
	}
else
	{
	echo mysql_error();
	}
}
?>
<?php
if(isset($connection))
mysql_close($connection);
?>