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
	$dob=$_GET['user4'];
	$email=$_GET['user5'];
	$user=$_GET['user'];
	$user2=$_GET['user2'];
	$user4=$_GET['user4'];
	$user5=$_GET['user5'];
		
	?>
<table id="structure">
<tr>
	<td id="navigation">
	<?php echo "<a href=\"user_info.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">user info</a>";?><br/><br/>
	<?php echo "<a href=\"edit_user.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">Edit user info</a>";?><br/><br/>
	<?php echo "<a href=\"see_message.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">See Messages</a>";?><br/><br/>
	<?php echo "<a href=\"search_users.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">Search other users</a>";?><br/><br/>
	<?php echo "<a href=\"begin_game.php?user=$user&user2=$user2&user4=$user4&user5=$user5\">Play tictactoe</a>";?><br/><br/>
	
	</td>
	<td id="page">
	<?php echo "welcome "." "." " .$fname." ".$lname."!";
	?>
	<html>
<form action="user_home.php?user=<?php echo $user?>&user5=<?php echo $user5?>&user4=<?php echo $user4?>&user2=<?php echo $user2?>" method="post">
Type Your Location : <input type="text" name="myaddress" /> (eg. Whitefield, Bangalore)
</form>
<br />
<?php
if(isset($_POST['myaddress'])){
$myaddress = urlencode($_POST['myaddress']);
$url = "http://maps.googleapis.com/maps/api/geocode/json?address=$myaddress&sensor=false";
$getmap = file_get_contents($url);
$googlemap = json_decode($getmap);
foreach($googlemap->results as $res){
$address = $res->geometry;
$latlng = $address->location;
$formattedaddress = $res->formatted_address;

?>
<br />
<iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=<?php
echo $latlng->lat ?>&lon=<?php echo $latlng->lng;?>&name=<?php $myaddress ?>"> </iframe>

<h2>Dynamic Location on Google Map!</h2>

<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo $myaddress;?>&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo urlencode($formattedaddress);?>&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
<?php
}
}
?>
	
	<a href="youtube.php">Watch videos :)</a>
	<form action="logout.php">
	<input type="submit" name="logout" value="logout"/> 
	</form>
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