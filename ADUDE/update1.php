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
<center><form action="update1.php" method="post"  onsubmit="return Form1_Validator(this)" name="Form1" align=center>
<label><font size="4px">Department</font></label>
 <select name="department" id="department">
  <option>Accounting</option>
  <option>Managment</option>
  <option>Markating Managment</option>
  <option>Economices</option>
  <option>Englshe</option>
  <option>Mathmatices</option>
  <option>Educational Planning</option></select>
  Batch<select name="year">
<?php
for ($i=1;$i<=3;$i++)
{
?>
<option><?php echo $i?></option>
<?php }?>
</select>
Semester<select name="simester">
<?php
for ($i=1;$i<=2;$i++)
{
?>
<option><?php echo $i?></option>
<?php }?>
</select> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 <input type="submit" value="Search" style="font-size:16px" name='search' align="center"></form></center>
<?php
if(isset($_POST['search'])){
@$dept=$_POST['department'];
@$semester=$_POST['simester'];
@$year=$_POST['year'];?>
<center><h3><p style='text-shadow: 4px 4px 4px green;'size=6px>Update student profile</p></h3></center>

<table align='center' border="1" bgcolor="#F0FFFF">
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'> <b>Student Id</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'> <b>First-name</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>Father Name</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>Last Name </b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>Batch</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>Semester</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size=''><b>Edit</b></th>
</tr>
<?php

$result = mysql_query("SELECT * FROM student where department='$dept' and year='$year' and simester='$semester'");
while($row = mysql_fetch_array($result))
  {
  $ctrl = $row['stud_id'];
  $fname=$row['firstname'];
  $ctr = $row['Middlename'];
  $lname=$row['lastname'];
  $phone=$row['year'];
  $actype=$row['simester'];  

?>
<tr>
<td><?php echo $ctrl;?></td>
<td><?php echo $fname;?></td>
<td><?php echo $ctr;?></td>
<td><?php echo $lname;?></td>
<td><?php echo $phone;?></td>
<td><?php echo $actype;?></td>

	
<?php
print("<td style='height:30px;'><a href = 'update12.php?key=".$ctrl."'>
		<img src = 'edit.jpg' width='45px' height='45px' title='Edit' ></img></a></td>
		");
		}
		}?>
		</tr></table>

</td>


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