<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
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
<table align=center width="90%"  border= bgcolor="#VVRRTE">
<tr>
<td height=20px  colspan=4>
<img src="2.jpg" width="100px" height="100" ><img src="1.jpg" width="1080px" height="100" ><img src="2.jpg" width="100px" height="100" >
</td>
</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#E5E4E2 >
  <div id="dropdown">
      <li><a href="index.php">Home</a></li>
   <li><a href="About.php">About as</a></li>
   <li><a href="register.php">Apply to Register</a></li>
     <li><a href="#">Departments</a>
      <ul>
	    <li><a href="Accounting.php">Accounting</a></li>
		<li><a href="Managment.php">Managment</a></li>
		<li><a href="Marketing.php">Marketing Managment</a></li>
		<li><a href="Economics.php">Economics</a></li>		  
		<li><a href="English.php">English</a></li>
        <li><a href="Mathematics.php">Mathematics</a></li>
        <li><a href="Educational.php">Educational Planning and managment</a></li>
		</ul>
		</li>	
	<li><a href="#">Login</a>
	   <ul>
		<li><a href="login.php">&nbsp;&nbsp;Admin</a>
		<li><a href="login.php">&nbsp;&nbsp;Instructor</a>
		<li><a href="login.php">&nbsp;&nbsp;Registrar</a>
		<li><a href="login.php">&nbsp;&nbsp;Student</a></li>	
		<li><a href="login.php">&nbsp;&nbsp;Dean</a></li>
		<li><a href="login.php">&nbsp;&nbsp;DeP-Head</a></li>
 </ul>
	</li>
	<li><a href="Contact.php">Contact as</a>
	</li>
	<li><a href="feedback.php">Feedback</a>
	</li>
	<li><a href="help.php">Help</a>
	</li>
	</li>	  
	 </div>

	 	
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 <font size="2"><a style="font-size:20px;" href="logout.php" id="login">Logout</a> </font>
</td>
</tr>
<tr>
<td  height=500px width=150px bgcolor="red" valign=top>
<table   bgcolor="white" border="2"  width="280" height="500" class="menu-bar" align="center">
<tr >
<td width="110" height="20"><b><font color="white">
<a href="Coordinator.php" link="white" >Home</a></font></b></td>
</tr>
<tr >
<td width="110" height="20"><b><font color="white">
<a href="new.php" link="white" >Post Announcment</a></font></b></td>
</tr>
<td><a href="new2.php" link="white" >Delet Announcment</a></font></b></td>
</tr>
<tr >
<td width="110" height="20"><b><font color="white">
<a href="assign.php" link="white" >Assign Insturacor</a></font></b></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="Addcurrculm.php" id="drop"><b>Add Curriclum</b></a></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="Upload.php" id="drop"><b>Upload Module</b></a></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="rep1.php" id="drop"><b>View Report</b></a></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="viewcomment.php" id="drop"><b>View Comments</b></a></td>
</tr> 
<tr>
 <td width="150" height="20">
 <a href="#" id="drop"><b>Manage Course </b></a></td>
</tr> 
<tr>
 <td width="150" height="20">
 <a href="changepassword5.php" id="drop"><b>Change Password</b></a></td>
</tr>  
<tr>
<td>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

    </td>
   </tr>
   </table>
</td>
<td  bgcolor="#43C6DB" valign="top">
<!--------body  --->
<script type='text/javascript'>
 function formValidation(){
//assign the fields
     
	var txt_username = document.getElementById('txt_username');
	
	if(emailValidator(txt_username,"check your e-mail format")){
	
	return true;
	}
return false;
		
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}


	</script>
	<br><br><br>
	
	 <?php
$result = mysql_query("SELECT * FROM feedback");
print( "<table border='1' align='center' bgcolor='white'>");
print("<tr>");
print("<th>Name </th>");
print("<th>Gender </th>");
print("<th>E-Mail</th>");
print("<th>Comment</th>");


while($row = mysql_fetch_array($result))
  {
$ctrl = $row['Email'];
  print ("<tr>");
  print ("<td>" . $row['name'] . "</td>");
  print ("<td>" . $row['gender'] . "</td>");
  print "<td>" . $row['Email'] . "</td>";
  print "<td>" . $row['comment'] . "</td>";
 print("<td align = 'center' width = '1'><a href = 'delete_mail.php?key=".$ctrl."'><img src = 'remove.png' border = '0' title='Delete' onclick='isdelete();'></img></a>
		</td>");
  print( "</tr>");
  }
print("</table>");

mysql_close($conn);
?>	
</td>
<td width=150px>
<table border=1 width=150px height="600" bgcolor=#E0FFFF>
<tr>
<td valign=top bgcolor=#E0FFFF>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=300px src="date.php"></iframe><a></center></h2>
</td>
</tr>
<tr>
<td >
<marquee direction="up"><font face="Lucida Calligraphy" color="black" size="4">
<center>Admass university distance education!!!</center></font></marquee></td></tr>
<tr>
<td bgcolor="white"><img src="d4.JPG" width="200" height="150"></font></h3>
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