<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['User_Id']))
 {
  $mail=$_SESSION['User_Id'];
 } 
 else 
 {
 ?>
<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">

</head>
<body>
<table align=center width=1000px height= border="">
<tr>
<td height=20px  colspan=4>
<img src="2.jpg" width="140px" height="50" ><img src="ima/c12.png" width="1052px" height="50" ><img src="2.jpg" width="140px" height="50" >
</td>
</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
  <li><a href="registrar.php" >&nbsp;&nbsp;Home</a>
  <li><a href="#">Register</a>
  <ul>
  <li><a href="regcourse.php">&nbsp;&nbsp;Course</a>
  <li><a href="regdep.php">&nbsp;&nbsp;Department</a>
   </ul>
	</li>
  <li><a href="update1.php"> Update </a></li>	
   <li><a href="rep1.php"> Generate Report</a></li>
    <li><a href="grade.php">Grade Report</a></li>
   <li><a href="#">View</a>
      <ul>
	  	<li><a href="viewstud.php">student profile</a></li>
		<li><a href="Viewcurriclum.php">Currculem</a></li>
		<li><a href="reject.php">reject student</a></li>
		</ul>
		</li>	
		<li><a href="#">Approve</a><ul>
<li><a href="viewapplication.php" >Approve applicant</a></li>
</ul></li>
<li><a href="feedback2.php" link="white" >Give Comment</a></li>
<li><a href="changepassword3.php" link="white" >Change Password </a></li>
		</li>		
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp;";?><?php echo $_SESSION['b'];?>)</a></li>	
    </div>
</td>
</tr>

<td  valign="top" width="100%" height="500" bgcolor="white">
<!--------body  ---><br>
<center><h3><p style='text-shadow: 4px 4px 4px blue;'size=6px>Update student profile</p></h3></center>

<?php
@$ctrl = $_REQUEST['key'];
$query="SELECT stud_id,firstname,Middlename,lastname,year,simester FROM student where stud_id='{$ctrl}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("student not registered!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row[0];
$r1=$row[1];
$r2=$row[2];
$r3=$row[3];
$r4=$row[4];
$r5=$row[5];

}
?>
<form id="form1" method="POST" action="update12.php"  onsubmit='return formValidation()'>
<table bgcolor=gray valign="top" style="border:3px solid #746gftrf;width:450px;height:350px;border-radius:15px;box-shadow:4px 10px 10px gray" align="center">
<tr>
<tr><td><b>Student_Id:</b></td><td><input type='text' readonly name='stud_id'  value="<?php echo "$r0"?>" required></td></tr>
<tr><td><b>First name:</b></td><td><input type='text' name='firstname' value="<?php echo "$r1"?>" required></td></tr>
<tr><td><b>Father Name:</b></td><td ><input  type='text' name='Middlename'  value="<?php echo "$r2"?>" required></td></tr>
<tr><td><b>Last Name:</b></td><td><input type='text' name='lastname' value="<?php echo "$r3"?>" required></tr></td>
<tr><td><b>Batch:</b></td><td><input type='text' name='year' min='1' max='3' value="<?php echo "$r4"?>" required></tr></td>
<tr><td><b>Semister:</b></td><td><input type='text' name='simester' min='1' max='3' value="<?php echo "$r5"?>" required></tr></td>
<tr><td colspan=2 align='center'><input type='submit' name='update' value='Update' class="button_example"><input type='reset'  value='Reset' class="button_example"></td></tr>
</table>
 <?php
}
?> 
 <?php
  if(isset($_POST['update']))
  {
                
	            $f=$_POST['stud_id'];
				$l=$_POST['firstname'];
				$u=$_POST['Middlename'];
				$user=$_POST['lastname'];
				$p=$_POST['year'];
				$phone=$_POST['simester'];
				
$update = mysql_query("update student set firstname='$l',Middlename='$u',lastname='$user',
year='$p', simester='$p' WHERE stud_id='{$f}'"); 
 if($update){
echo "<font color=green size='6px'><center>Updated succssfully</center></font>";

echo' <meta content="5 ;update1.php" http-equiv="refresh" />';
	}  
else
   {
echo '<script type="text/javascript">alert("not Updated ")</script>' .$update;
echo' <meta content="4;update1.php" http-equiv="refresh" />';
   }
}

  
  ?>
</td>
<td width=150px>
<table border=0 width=150px height="250" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=422px src="date.php"></iframe><a></center></h2>
</td>
</tr>

</table>
</td>
</tr>

<tr>
<td colspan=3 bgcolor=gray>

<table align="center" bgcolor=""><tr><td><font face="Times New Roman" color="white" size="3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Admass Univresity of Collage Distance Eduction Office All Right are Reservd &copy; 2010 E.C. 
&nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</ht ~dulla^@204~ 