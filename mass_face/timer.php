<?php session_start();?>
<?php require_once("includes/connection.php"); ?>
<?php
function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
		}
$query="SELECT * ";
$query.="FROM tic WHERE mid1='{$_SESSION['user_id']}' OR mid2='{$_SESSION['user_id']}'";
$result_set=mysql_query($query);
confirm_query($result_set);
$ab=mysql_fetch_array($result_set);
if(($_SESSION['user_id2']=='a')&&$ab['won']=='a')
	{
	echo "winner#";
	}
else if(($_SESSION['user_id2']=='a')&&$ab['won']=='b')
	echo "loser#";
else if(($_SESSION['user_id2']=='b')&&$ab['won']=='a')
	echo "loser#";
else if(($_SESSION['user_id2']=='b')&&$ab['won']=='b')
	echo "winner#";
else
	{
	if($ab['turn']==$_SESSION['user_id2'])
	{
	echo $ab["n1"]."~".$ab["n2"];
	}
	else
	echo "inactive";
	}
	?>