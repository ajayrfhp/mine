<?php require_once("includes/session.php"); ?>
<?php
function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
	}
?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
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
<?php
	$user=$_GET['user'];
	$user2=$_GET['user2'];
	$user4=$_GET['user4'];
	$user5=$_GET['user5'];
	$view=$_GET['view'];
	?>
<?php
	$query="SELECT * ";
	$query.="FROM users ";
	$query.="WHERE email = '{$view}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	if(mysql_num_rows($result_set)==1)
		{
		$found_user=mysql_fetch_array($result_set);
		$found_name=$found_user['firstname'];
		$found_lname=$found_user['lname'];
		$found_pwd=$found_user['pwd'];
		$found_dob=$found_user['dob'];
		$found_email=$found_user['email'];
		}
?>
<table id="structure">
<tr>
	<td id="navigation">
	<?php echo "<a href=\"user_home.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">home</a>";?><br/><br/>
	<?php echo "<a href=\"edit_user.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">Edit user info</a>";?><br/><br/>
	<?php echo "<a href=\"see_message.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">See messages</a>";?><br/><br/>
		<?php echo "<a href=\"search_users.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">Search other users</a>";?>
	</td>
	<td id="page">
	<ul class="subjects">
	<li><?php echo "first name is ".  $found_name;?></li><br/>
	<li><?php echo "last  name is ". $found_lname;?></li><br/>
	<li><?php echo "date of birth is".  $found_dob;?></li><br/>
	<li><?php echo "email id is ". $found_email;?></li><br/>
	</ul>
	<form action="message.php" method="get">
	<textarea name="message" id="message" rows="15" cols="50">
	</textarea><br/>
	<div id="hide">
	<input name="to" value="<?php echo $found_email;?>"/>
	<input name="from" value="<?php echo $user5;?>"/>
	</div>
	<input type="submit" name="send" value="send"/> 
	
	</form>
	</td>
	
	</tr>
	
	</table>
<?php include("includes/footer.php"); ?>