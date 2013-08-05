<?php require_once("includes/session.php");?>
<?php require_once("includes/connection.php"); ?>
<?php confirm_logged_in(); ?>
<?php include("includes/header.php"); ?>
<?php
	$user=$_GET['user'];
	$user2=$_GET['user2'];
	$user4=$_GET['user4'];
	$user5=$_GET['user5'];
	?>
<?php
function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
	}
?>
<table id="structure">
<tr>
	<td id="navigation">
	<?php echo "<a href=\"user_info.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">user info</a>";?><br/><br/>
	<?php echo "<a href=\"edit_user.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">Edit user info</a>";?><br/><br/>
	<?php echo "<a href=\"search_users.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">Search other users</a>";?><br/><br/>
	<?php echo "<a href=\"see_message.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">See Messages</a>";?><br/><br/>
	<?php echo "<a href=\"user_home.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">Home</a>";?>
	
	</td>
	<td id="page">
	<ul class="subjects">
	<?php
	$query="SELECT * ";
	$query.="FROM new ";
	$query.="WHERE rr = '{$user5}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
		
		while($ab=mysql_fetch_array($result_set) )
			{
			if(($ab['content']))
			{
			$query="SELECT * ";
			$query.="FROM users ";
			$query.="WHERE email = '{$ab['sr']}'";
			$result_new=mysql_query($query);
			confirm_query($result_new);
			while($ba=mysql_fetch_array($result_new))
			{
			$id=$ab['id'];
			echo "<li><a href=\"newmessage_user.php?user=$user&user2=$user2&user4=$user4&user5=$user5&id=$id&view=". urlencode($ba["email"]). "\">{$ba["firstname"]}{$ba["lname"]}</a></li>";
			echo $ab['time'];
			}
				
			}
			}
		
	?>
	</ul>
	</td>
	</tr>
</table>
</div>
 </body> 
</html>
<?php
if(isset($connection))
mysql_close($connection);
?>