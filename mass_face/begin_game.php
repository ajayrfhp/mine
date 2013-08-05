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
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
		}
		?> 
<?php include("includes/header.php"); ?>
<?php
	$fname=$_GET['user'];
	$lname=$_GET['user2'];
	$dob=$_GET['user4'];
	$email=$_GET['user5'];
	$user=$_GET['user'];
	$user2=$_GET['user2'];
	$user4=$_GET['user4'];
	$user5=$_GET['user5'];
	$status="waiting";
	$query="UPDATE users SET status='{$status}' WHERE id='{$_SESSION['user_id']}'";
	$result_set=mysql_query($query);
confirm_query($result_set);
	?>
<script>
var timer=setInterval(
function()
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	nw=xmlhttp.responseText;
	if(nw=='gameon')
		{
		finish();
		}
	}
}
xmlhttp.open("GET","http://localhost/mass_face/game_on.php",true);
xmlhttp.send();
},1000);

function finish()
{
clearInterval(timer);
alert("game on");
window.location="http://localhost/mass_face/tictactoe.php";
}
</script>
<body >
<table id="structure">
<tr>
	<td id="navigation">
	<?php 
	$user=$_GET['user'];
	$user2=$_GET['user2'];
	$user4=$_GET['user4'];
	$user5=$_GET['user5'];
	echo "<a href=\"user_info.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">user info</a>";?><br/><br/>
	<?php
	$user=$_GET['user'];
	$user2=$_GET['user2'];
	$user4=$_GET['user4'];
	$user5=$_GET['user5'];
	echo "<a href=\"edit_user.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">Edit user info</a>";?><br/><br/>
	<?php $user=$_GET['user'];
	$user2=$_GET['user2'];
	$user4=$_GET['user4'];
	$user5=$_GET['user5']; echo "<a href=\"see_message.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">See Messages</a>";?><br/><br/>
	<?php  $user=$_GET['user'];
	$user2=$_GET['user2'];
	$user4=$_GET['user4'];
	$user5=$_GET['user5']; 
	echo "<a href=\"search_users.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">Search other users</a>";?><br/><br/>	
	</td>
	<td id="page">
	<?php echo "welcome "." "." " .$fname." ".$lname."!";
	?>
	<html>
<br />
	

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