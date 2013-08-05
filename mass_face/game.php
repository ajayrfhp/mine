<?php session_start();?>
<?php require_once("includes/connection.php"); ?>
<?php
	if(!isset($_SESSION['done1']) || !isset($_SESSION['done2']))
	{
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
		}
$query="SELECT * FROM game";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	$ab=mysql_fetch_array($result_set);
	if(empty($ab["s1"]))
	{
	$_SESSION['user_id']='a';
		echo $SESSION['user_id'];
	$a='a';
	$b='b';
	$query="INSERT into game 
		(s1,s2) VALUES('{$a}','{$b}')";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	$query="INSERT INTO tic (turn) VALUES ('{$a}')";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	}
	else
	{
	$_SESSION['user_id']='b';
	}
	function redirect_tonew($location)
	{
	if($location!=NULL)
		{
		header("Location:{$location}");
		exit;
		}
	}
	}
?>
<html>
<head>
<script>
function f()
	{
  f.count = ++f.count || 1 ;
  }
function fn()
{
var nw;

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
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	nw=xmlhttp.responseText;
	alert(nw);
	/*if(nw=='true')
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
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	}
  }

xmlhttp.open("GET","http://localhost/my_face/other.php",true);
xmlhttp.send();
		}
	*/
	}
 }
xmlhttp.open("GET","http://localhost/my_face/my.php",true);
xmlhttp.send();
}
</script>
</head>
<body>

<form> 
<input type="button" onclick="fn()" value="click"/>
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>1
</html>
