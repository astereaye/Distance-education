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
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="JS/jquery-3.3.1.js" type="text/javascript"></script>
 <script type="text/JavaScript" src="js/addcurriclum.js"></script>
  <script language="javascript">
  function check()
  {
   if(document.getElementById("department").value == "")
   {
    alert("Select your department !!");
    document.getElementById("department").focus();
    return false;
   }
     if(document.getElementById("course_name").value =="")
   {
    alert('First Enter your course_name!');
    document.getElementById("course_name").focus();
    return false;
   }
      if(document.getElementById("course_code").value =="")
   {
    alert('First Enter your course_code!');
    document.getElementById("course_code").focus();
    return false;
   }
     if(document.getElementById("crdite_houre").value =="")
   {
    alert('First Enter crdite_houre im numbers only!');
    document.getElementById("crdite_houre").focus();
    return false;
   }
      if(document.getElementById("Pre_requst").value =="")
   {
    alert('First enter Pre_requst!!');
    document.getElementById("Pre_requst").focus();
    return false;
   }
       if(document.getElementById("semister").value =="")
   {
    alert('First enter semister!!');
    document.getElementById("semister").focus();
    return false;
   }
       if(document.getElementById("year").value =="")
   {
    alert('First enter year!!');
    document.getElementById("year").focus();
    return false;
   }
  }
 </script>
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">

</head>
<body>
<table align=center width=1000px height= border="6">
<tr>
<td height=20px  colspan=4>
<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>
</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
<li><a href="Addcurrculm.php" id="drop">Add Curriclum</a></li>
<li> <a href="Upload.php" id="drop">Upload Module</a></li>
<li><a href="#" link="white" >Assign </a>

<ul>
<li><a href="assign.php" link="white" >Assign Insturacor</a></li>
<li><a href="assigncourse_student.php" link="white" >Assign student</a></li>
</ul></li>
<li><a href="#" link="white" >Announcment</a>
      <ul>
<li><a href="new.php" link="white" >Post Announcment</a></li>
<li><a href="new2.php" link="white" >Delet Announcment</a></li>
		</ul>
		</li>
				<li><a href="#">View</a>
      <ul>
<li><a href="rep11.php" >View Report</a></li>
<li><a href="viewcomment.php" >View Comments</a></li>
<li><a href="uplodedmodule.php" >Uploaded Module</a></li>

</ul>
</li>
<li><a href="changepassword5.php" >Change Password</a></li>
</li>
<li><a href="logout.php" >Logout(<?php echo $_SESSION['a'];?>)</a></li>	   
    </div>
</td>
</tr>
<td  valign="top" bgcolor="white">
<!--------body  --->
<td  valign="top" bgcolor="white">
<!--------body  --->
<font color="#8A2BE2"><h3 align=center>  
 Delete Uploaded  Module</h3></font>
<?php

$result = mysql_query("SELECT * FROM module where department='Accounting'");
echo "<table id='vtable' style='width:500px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>
<tr>
<th bgcolor='#336699'><font color='white' size='2'>Module Name</th>
<th bgcolor='#336699'><font color=white size='2'>Department</th>
<th bgcolor='#336699'><font color=white size='2'>Term</th>
<th bgcolor='#336699'><font color=white size='2'>Year</th>
<th bgcolor='#336699'><font color=white size='2'>Delete</th>
</tr>";
echo'</font>';
while($row = mysql_fetch_array($result))
  {
  $ctrl = $row['modulenum'];
 print ("<tr>");
 print ("<td><font size='2'>" . $row['coursename'] . "</td>");
 print ("<td><font size='2'>" . $row['department'] . "</td>");
 print ("<td><font size='2'>" . $row['term'] . "</td>");
 print ("<td><font size='2'>" . $row['year'] . "</td>");
print("<td align = 'center' width = '1'><a href = 'd.php?key=".$ctrl."'><img src = 'remove.png' border = '0' title='Delete' onclick='isdelete();'></img></a>
		</td>");
  }

print( "</table>");
mysql_close($conn);
?>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=405px src="date.php"></iframe><a></center></h2>
</td>
</tr>

</table>
</td>
</tr>

<tr>
<td colspan=3 bgcolor=gray>

<table align="center" bgcolor=""><tr><td><font face="Times New Roman" color="white" size="3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Admass University of Collage Distance Eduction Office All Right are Reserved &copy; 2010 E.C. 
&nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</ ~dulla^@204~ 