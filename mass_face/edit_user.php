<?php require_once("includes/session.php");?>
<?php require_once("includes/connection.php"); ?>
<?php confirm_logged_in(); ?>
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
<?php include("includes/header.php"); ?>
<?php
	$fname=$_GET['user'];
	$lname=$_GET['user2'];
	$pwd=$_GET['user3'];
	$dob=$_GET['user4'];
	$email=$_GET['user5'];
	$user=$_GET['user'];
	$user2=$_GET['user2'];
	$user4=$_GET['user4'];
	$user5=$_GET['user5'];
	
	?>
<table id="structure">
<form action="update_user.php" method="post">
<tr>
	<td id="navigation">
	<?php echo "<a href=\"user_home.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">home</a>";?><br/><br/>
	<?php echo "<a href=\"user_info.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">user info</a>";?><br/><br/>
	<?php echo "<a href=\"see_message.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">See Messages</a>";?><br/><br/>
	<?php echo "<a href=\"search_users.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">Search other users</a>";?>
	</td>
	<td id="page">
	<input type="text" name="ufname" id="ufname" value="<?php echo $fname;?>"/>
	</td>
</tr>
<tr>
	<td id="navigation">
	
	</td>
	<td id="page">
	<input type="text" name="ulname" id="ulname" value="<?php echo $lname;?>"/>
	</td>
</tr>
<tr>
	<td id="navigation">
	</td>
	<td id="page">
	<input type="text" name="udob" id="udob" value="<?php echo $dob;?>" />
	</td>
</tr>
<tr>
	<td id="navigation">
	</td>
	<td id="page">
	<input type="text" name="upwd" id="upwd" value="enter new password"/>
	</td>
</tr>
<tr>
	<td id="navigation">
	</td>
	<td id="page">   
	<input type="text" name="uemail" value="<?php echo $email;?>"/><br/>
	<input type="submit" name="update" value="update"/>
	<br/><br/>
	upload from file<input type="file" name="photomethod" value="upload"/>
	<a href="cam.php">Take now</a>
	
	</form>
	</td>
	</tr>
</form>
</table>
<?php include("includes/footer.php"); ?>