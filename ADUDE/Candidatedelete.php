<html>
<head>
<title>Delete a Record from Database</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
	background-color: #699;
}
body,td,th {
	color: #FFF;
	font-size: 18px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
</style>
</head>
<body>
<img src="file:///D|/3.jpg">
<br>
<?php
if(isset($_POST['delete']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname='students';
$conn = mysql_connect($dbhost, $dbuser, $dbpass,$dbname);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$Cid = $_POST['phone'];

$sql = "DELETE FROM fresh WHERE phone = '$phone'" ;

mysql_select_db('students');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Data is deleted successfully\n";
mysql_close($conn);
}
else
{hy
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="200">INSERT DELETE QUERY </td>
<td><input name="phone" type="text" id="phone"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="delete" type="submit" id="delete" value="Delete">
</td>
</tr>
</table>
</form>
<?php
}
?>
<?php
include"Connection.php";
$sql="SELECT* FROM fresh ";	
 
$query=mysql_query($sql)or die(mysql_error());
?>
<style type="text/css">
body {
	background-color: #699;
}
body,td,th {
	color: #FFF;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 16px;
}
#apDiv1 {
	position: absolute;
	width: 950px;
	height: 39px;
	z-index: 1;
	left: 10px;
	top: 5px;
}
.M {
	font-size: 18px;
}
</style>
<table width="180"cellpadding="1"cellspacing="1"border="1">
  <tr>
  <td><strong>Firstname</strong></td>
  <td><strong>Lastname</strong></td>
  <td><strong>Sex</strong></td>
  <td><strong>Age</strong></td>
  <td><strong>School</strong></td>
  <td><strong>Wereda</strong></td>
  <td><strong>Kebele</strong></td>
  <td><strong>phone</strong></td>
  <td><strong>Result</strong></td>
   <td><strong>Agent</strong></td>
   <td><strong>Agent Phone</strong></td>
  </tr>
  <?php while($row=mysql_fetch_array($query)){?>
  <tr>
  <td style="colspan:2"><?php echo $row['firstname'];?></td>
  <td style="colspan:2"><?php echo $row['lastname'];?></td>
  <td><?php echo $row['sex'];?></td>
  <td style="colspan:2"><?php echo $row['age'];?></td>
  <td><?php echo $row['school'];?></td>
<td><?php echo $row['wereda'];?></td>
  <td><?php echo $row['kebele'];?></td>
  <td><?php echo $row['phone'];?></td>
  <td><?php echo $row['result'];?></td>
  <td><?php echo $row['agent'];?></td>
  <td><?php echo $row['agentphone'];?></td>
  <tr>
  <?php } ?>
</table>
<p><a href="home1.php">Back To Home</a></p>
</ ~dulla^@204~ 