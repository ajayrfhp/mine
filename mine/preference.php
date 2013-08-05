<?php require_once("includes/session.php");?>
<?php require_once("includes/connection.php"); ?>
<?php confirm_logged_in(); ?>
<?php
function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
	}
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
$a=$_GET['a'];
$b=$_GET['b'];
$query="UPDATE student SET ";
	$query.=" pair='{$b}'";
	$query.="WHERE email = '{$a}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
$query="UPDATE student SET ";
	$query.=" pair='{$a}'";
	$query.="WHERE email = '{$b}'";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	$x=1;
	?>
<table id="structure">
<tr>
	<td id="navigation">
		</td>
	<td id="page">
	<ul class="subjects">
			<?php
		$query="SELECT * ";
		$query.="FROM student WHERE id='{$_SESSION['user_id']}' ";
		$result_set=mysql_query($query);
		confirm_query($result_set);
		$ab=mysql_fetch_array($result_set);
		$part=$ab['pair'];
		$query="SELECT * ";
		$query.="FROM student";
		$result_set=mysql_query($query);
		confirm_query($result_set);
			while($ab=mysql_fetch_array($result_set))
			{
				
			if($ab["id"]!=$_SESSION['user_id'] && $part!=$ab['email'])
			{
			echo "<li><a href=\"pref_user.php?view=". urlencode($ab["email"]). "\">{$ab["firstname"]}{$ab["lname"]}</a></li>";
			echo "<br/>";
			echo "<br/>";
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