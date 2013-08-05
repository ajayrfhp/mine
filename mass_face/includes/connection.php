<?php
require ("constants.php");
$connection=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if(!$connection)
	{
	die("database connection failed" .mysql_error());
	}

$db_select=mysql_select_db("my_face",$connection);
if(!$db_select)
	{
	die("database selection failed".mysql_error());
	}
?>