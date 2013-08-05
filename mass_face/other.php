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
$query="UPDATE  tic SET  n1=1,turn='false'";
$result_set=mysql_query($query);
confirm_query($result_set);
echo "done";
?>
