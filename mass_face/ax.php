<?php
session_start();
?>
<?php require_once("includes/connection.php"); ?>
<html>
<?php
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
		}
?>
<?php

$query="SELECT * FROM game";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	$ab=mysql_fetch_array($result_set);
	if(empty($ab["s1"]))
	{
	$_SESSION['user_id']='a';
	$a='a';
	$b='b';
	$query="INSERT into game 
		(s1,s2) VALUES('{$a}','{$b}')";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	$query="INSERT INTO tic (turn) VALUES ('{$a}')";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	}
	else
	{
	$_SESSION['user_id']='b';
	}
	function redirect_tonew($location)
	{
	if($location!=NULL)
		{
		header("Location:{$location}");
		exit;
		}
	}
	echo $_SESSION['user_id'];
?>
<form action="game.php">
<input type="submit" value="start game" name="start"/>
</form>
</html>