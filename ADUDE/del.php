<?php
session_start();
include 'connection.php';
$user = $_SESSION['dates'];
$log = $_SESSION['password'];
if ($log != "log"){
	header ("Location:new2.php");
}

$ctrl = $_REQUEST['key'];


$SQL = "DELETE FROM userinfo WHERE dates = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'new2.php'< ~dulla^@204~ 