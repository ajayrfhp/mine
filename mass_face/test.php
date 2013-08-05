<?php require_once("includes/connection.php"); ?>
<?php
session_start();?>
<?php
	function logged_in(){
	return isset($_SESSION['user_id']);
	}
	function confirm_logged_in(){
	if(!logged_in()){
	redirect_tonew("index.php");
	}
	}
	function redirect_tonew($location)
	{
	if($location!=NULL)
		{
		header("Location:{$location}");
		exit;
		}
	}
	
	echo $_SESSION['user_id'];
	?>
<?php



$filename = date('YmdHis') . '.jpg';
$result = file_put_contents( $filename, $HTTP_RAW_POST_DATA );
if (!$result) {
	print "ERROR: Failed to write data to $filename, check permissions\n";
	exit();
}
$query="UPDATE users SET
		photo='{$filename}'
		WHERE id = '{$_SESSION['user_id']}'";

$result=mysql_query($query,$connection);
$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $filename;
print "$url\n";

?>
<?php
if(isset($connection))
mysql_close($connection);
?>