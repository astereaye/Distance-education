<?php
session_start();
include 'connection.php';
$user = $_SESSION['modulenum'];
$log = $_SESSION['password'];
if ($log != "log"){
	header ("Location:uplodedmodule.php");
}

$ctrl = $_REQUEST['key'];


$SQL = "DELETE FROM module WHERE modulenum = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'uplodedmodule.php'< ~dulla^@204~ 