<?php session_start();?>
<?php require_once("includes/connection.php"); ?>
<?php
function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
		}
	$r='waiting';	
$query="SELECT * ";
$query.="FROM users WHERE status='{$r}' LIMIT 2";
$result=mysql_query($query);
confirm_query($result);
$x=mysql_num_rows($result);
 while($ab=mysql_fetch_array($result))
	{
	if($x==2&&$_SESSION['user_id']==$ab['id'])
	{
	
	$query="SELECT * FROM game";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	$ba=mysql_fetch_array($result_set);
	if(empty($ba['s1']))
	{
	$t="set";
	$query="INSERT INTO game (s1) VALUES ('{$t}')";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	
	$_SESSION['user_id2']='a';
	
	$query="INSERT INTO tic (turn,mid1) VALUES ('a','{$_SESSION['user_id']}')";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	echo "gameon";
	exit();
	}
		elseif($ba['s1']=='set')
	{
	$t1="unset";
	$query="UPDATE game SET s1='{$t1}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	$query="UPDATE tic SET turn='b',mid2='{$_SESSION['user_id']}' WHERE mid1 IS NOT NULL";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	$_SESSION['user_id2']='b';
	echo "gameon";
	exit();
	}
	elseif($ba['s1']=='unset')
		{
		$t="set";
	$query="UPDATE game SET s1= '{$t}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	$_SESSION['user_id2']='a';
		$query="INSERT INTO tic (turn,mid1) VALUES ('a','{$_SESSION['user_id']}')";
	$result_set=mysql_query($query);
	confirm_query($result_set);
		echo "gameon";
	exit();
		}
	}
	}
	?>