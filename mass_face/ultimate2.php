<?php require_once("includes/connection.php"); ?>

<?php
$fname="asdasdasd";
$lname="hw";
$email="blur";
$dob="sad";
$pwd="asdasd";
$gender="male";
$query="INSERT into new
		(content,rr,sr) VALUES('{$fname}','{$lname}','{$email}')";
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