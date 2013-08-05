<?php session_start();?>
<?php require_once("includes/connection.php"); ?>
<?php
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
		}
		$query="SELECT * ";
$query.="FROM tic";
$result_set=mysql_query($query);
confirm_query($result_set);
$ab=mysql_fetch_array($result_set);
if($_SESSION['user_id']=='b' and $ab["turn"]=='b')
	{
	$t=10;
	$y='a';
	$query="UPDATE tic SET
		n2 = '{$t}',
		turn = '{$y}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	echo "done";

	}
else if($ab["turn"]=='a' && ($_SESSION['user_id']=='a'))
{

	{
	$t=10;
	$y='b';
	$query="UPDATE tic SET
		n1 = '{$t}',
		turn = '{$y}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	echo "done";
	}
}

else
		{
		echo "not ur turn :P wait ..";
		}
?>
