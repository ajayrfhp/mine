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
$fname=mysql_prep($_POST['fname']);
$lname=mysql_prep($_POST['lname']);
$email=mysql_prep($_POST['email']);
$dob=mysql_prep($_POST['dob']);
$pwd=md5(mysql_prep($_POST['pwd']));
$gender=mysql_prep($_POST['gender']);
/*echo $gender;
echo $fname;
echo $lname;
echo $email;
echo $dob;
echo $pwd;*/
$query="INSERT into users 
		(firstname,lname,email,dob,pwd,gender) VALUES('{$fname}','{$lname}','{$email}','{$dob}','{$pwd}','{$gender}')";
$result=mysql_query($query,$connection);
if($result)
	{
	redirect_to("hello.html");
	}
else
	{
	echo mysql_error();
	}
?>

<?php
if(isset($connection))
mysql_close($connection);
?>