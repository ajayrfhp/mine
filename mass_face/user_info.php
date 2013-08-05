<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php confirm_logged_in(); ?>
<?php include("includes/header.php"); ?>
<table id="structure">
<tr>
	<?php
	$fname=$_GET['user'];
	$lname=$_GET['user2'];
	$dob=$_GET['user4'];
	$email=$_GET['user5'];
	$user=$_GET['user'];
	$user2=$_GET['user2'];
	$user4=$_GET['user4'];
	$user5=$_GET['user5'];
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
	}
	?>
	<td id="navigation">
	<?php echo "<a href=\"user_home.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">home</a>";?><br/><br/>
	<?php echo "<a href=\"edit_user.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">Edit user info</a>";?><br/><br/>
	<?php echo "<a href=\"see_message.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">See Messages</a>";?><br/><br/>
	<?php echo "<a href=\"search_users.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">See other users</a>";?>
	</td>
	<td id="page">
	
	
	<ul class="subjects">
	<li><?php echo "first name is ".  $fname;?></li><br/>
	<li><?php echo "last  name is ". $lname;?></li><br/>
	<li><?php echo "date of birth is".  $dob;?></li><br/>
	<li><?php echo "email id is ". $email;?></li><br/>
	</ul>
	<?php
	$query="SELECT * ";
	$query.="FROM users ";
	$query.="WHERE id = '{$_SESSION['user_id']}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
		while($ab=mysql_fetch_array($result_set))
			{
			//echo "<li><a href=\"view_user.php?user=$user&user2=$user2&user4=$user4&user5=$user5&view=". urlencode($ab["email"]). "\">{$ab["firstname"]}{$ab["lname"]}</a></li>";
			echo "<img src=\"$ab[photo]\"/>";
			echo "<br/>";
			echo "<br/>";
			
			}
	?>
	
	
	</td>
	</tr>
</table>
<?php include("includes/footer.php"); ?>