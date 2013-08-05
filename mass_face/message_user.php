<?php require_once("includes/session.php"); ?>
<?php
function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
	}
	?>
<?php require_once("includes/connection.php"); ?>
<?php confirm_logged_in(); ?>
<?php include("includes/header.php"); ?>
<?php
	function redirect_to($location)
	{
	if($location!=NULL)
		{
		header("Location:{$location}");
		exit;
		}
	}
?>
<table id="structure">
<tr>
	<td id="navigation">
	<?php echo "<a href=\"user_home.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">home</a>";?><br/><br/>
	<?php echo "<a href=\"edit_user.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">Edit user info</a>";?><br/><br/>
	<?php echo "<a href=\"user_info.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">user info</a>";?><br/><br/>
	<?php echo "<a href=\"search_users.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">Search other users</a>";?>
	</td>
	<td id="page">
	<?php
	$fname=$_GET['user'];
	$lname=$_GET['user2'];
	$dob=$_GET['user4'];
	$email=$_GET['user5'];
	?>
	<?php
	$query="SELECT * ";
	$query.="FROM new ";
	$query.="WHERE rr = '{$email}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
		while($ab=mysql_fetch_array($result_set))
			{
			echo "FROM ".$ab["sr"];
			echo "<br/>";echo "<br/>";echo "<br/>";
			echo "content:";
			echo "<br/>";
			echo "<br/>";echo "<br/>";
			echo "-----------------------------------------------------";
			echo "<br/>";
			echo "<br/>";echo "<br/>";

			echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
			echo $ab["content"];
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";echo "<br/>";
			echo "-----------------------------------------------------";
			echo "<br/>";
			echo "<br/>";echo "<br/>";
			}
		
	?>
	
	</td>
	
	</tr>
</table>
</div>
<div id="footer">Copyright 2013,my_face:P</div>
 </body> 
</html>
<?php
if(isset($connection))
mysql_close($connection);
?>