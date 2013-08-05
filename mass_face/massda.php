<?php session_start();?>
<?php require_once("includes/connection.php"); ?>
<?php
	if($_GET['num']!=-1)
	{$number=$_GET['num'];
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
	if($_SESSION['user_id2']=='b' and $ab["turn"]=='b')
	{
	$y='a';
	$query="UPDATE tic SET
		n2 = '{$number}',
		turn = '{$y}' WHERE mid1='{$_SESSION['user_id']}' OR mid2='{$_SESSION['user_id']}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	$query="SELECT * ";
	$query.="FROM tic WHERE mid1='{$_SESSION['user_id']}' OR mid2='{$_SESSION['user_id']}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	$ab=mysql_fetch_array($result_set);
		if(($ab["n2"]%238==0 || $ab["n2"]%627==0 || $ab["n2"]%1495==0 || $ab["n2"]%506==0 || $ab["n2"]%935==0 || $ab["n2"]%30==0 || $ab["n2"]%1001==0 || $ab["n2"]%7429==0 )&&$ab["n2"]) 
		{
		$e='b';
		$d='a';
		$query="UPDATE tic SET
			won = '{$e}',
			lose = '{$d}' WHERE mid1='{$_SESSION['user_id']}' OR mid2='{$_SESSION['user_id']}'";
		$result_set=mysql_query($query);
		confirm_query($result_set);
		}
		else
		echo $ab["n1"]."~".$ab["n2"];
		
		}
	else if($ab["turn"]=='a' and ($_SESSION['user_id2']=='a'))
	{
		$y='b';
		$query="UPDATE tic SET
			n1 = '{$number}',
			turn = '{$y}' WHERE mid1='{$_SESSION['user_id']}' OR mid2='{$_SESSION['user_id']}'";
		$result_set=mysql_query($query);
		confirm_query($result_set);
		$query="SELECT * ";
	$query.="FROM tic WHERE mid1='{$_SESSION['user_id']}' OR mid2='{$_SESSION['user_id']}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	$ab=mysql_fetch_array($result_set);
		
		if(($ab["n1"]%238==0 || $ab["n1"]%627==0 || $ab["n1"]%1495==0 || $ab["n1"]%506==0 || $ab["n1"]%935==0 || $ab["n1"]%30==0 || $ab["n1"]%1001==0 || $ab["n1"]%7429==0 )&&$ab["n1"])
		{
		$e='b';
		$d='a';
		$query="UPDATE tic SET
			won = '{$d}',
			lose = '{$e}' WHERE mid1='{$_SESSION['user_id']}' OR mid2='{$_SESSION['user_id']}'";
		$result_set=mysql_query($query);
		confirm_query($result_set);
		}
		else
		{
		echo $ab["n1"]."~".$ab["n2"];
		}
	}

	else
			{
			echo "Please wait for your turn";
			}
	}
	else
		{
		echo "intialising";
		}
	
?>
