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
<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>
</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
  <li><a href="student.php">&nbsp;&nbsp;Home</a>
  <li><a href="#">Register</a>
  <ul>
  <li><a href="regcourse.php">&nbsp;&nbsp;Course</a>
  <li><a href="regdep.php">&nbsp;&nbsp;Department</a>
  <li><a href="registerstudent.php">&nbsp;&nbsp;Student</a>
   </ul>
	</li>   
   <li><a href="rep1.php"> Generate Report</a></li>
    
  <li><a href="#">View</a>
      <ul>
	    <li><a href="viewapplication.php">Applicante</a></li>
		<li><a href="requst.php">Course Requst</a></li>
		<li><a href="Viewcurriclum.php">Currculem</a></li>
		</ul>
		</li>	
		<li><a href="feedback2.php" link="white" >Give Comment</a>
		<li><a href="changepassword3.php" link="white" >Change Password </a>
		</li>   	
       </div>	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logout.php" ><font color="green">Logout [<?php echo $_SESSION['a'];?>]</font></p></a><p>	   

</td>
</tr>

<td  valign="top" width="926" bgcolor="white">
<!--------body  --->
<br><br>
<?php
 
$r = mysql_query("SELECT Department,course_name,course_code,crdite_houre,pre_requst,semister,year  FROM curriculem");

print"<table border='2' width='655'  bgcolor='' align='center' >";
print"<tr color='green'>";
print"<th>Department</th>";
print"<th>Course Name</th>";
print"<th>Course Code</th>";
print"<th>Crdite Houre</th>";
print"<th>Pre_Requst</th>";
print"<th>semister</th>";
print"<th>year</th>";
print"</tr>";
while($row = mysql_fetch_array($r))
  {
    print ("<tr>");

 print ("<td>" . $row['Department'] . "</td>"); 
 print ("<td>" . $row['course_name'] . "</td>");
 print ("<td>" . $row['course_code'] . "</td>");
 print ("<td>" . $row['crdite_houre'] . "</td>");
 print ("<td>" . $row['pre_requst'] . "</td>");
 print ("<td>" . $row['semister'] . "</td>");
 print ("<td>" . $row['year'] . "</td>");
  print ("</tr>");
  }
print( "</table>");

mysql_close($conn);
?>
</td>


<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=450px src="date.php"></iframe><a></center></h2>
</td>
</tr>

</table>
</td>
</tr>

<tr>
<td colspan=3 bgcolor=gray>
<table align="center" bgcolor="kebede"><tr><td><font face="Times New Roman" color="green" size="3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;Admass Univresity Distance Eduction Office All Right are Reservd   &copy; 2010 E.C.
 &nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</ ~dulla^@204~ 