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
<table align=center width=1000px bgcolor="white" border="white">
<tr>
<td height=20px  colspan=4>

<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>

</tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
 <li><a href="Instructor.php">&nbsp;&nbsp;Home</a></li>
 <li><a href="#">Download</a>
 <ul>
<li><a href="downloadModule.php"> Download Module</a></li>
<li><a href="download3.php"> download Assignment Answer</a></li>
</ul></li>
<li><a href="addresul.php"> Add Result</a></li>
<li><a href="updateresult.php"> Update Result</a></li>
<li><a href="assigmenupload.php"> Upload Assigment</a></li>
<li><a href="changepassword2.php" >Change Password </a></li>
<li><a href="feedback4.php"> Give Feedback </a></li>
	</li>		
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp; Instructor";?>)</a></li>	
</div>			 	


</td>
</tr>

<td  valign="top" bgcolor="white">
<!--------body  --->
<center><h3><font color="blue">Update student Result</font></h3></center>

<?php
@$ctrl = $_REQUEST['key'];
$query="SELECT id,stud_id,course_code,year,semister,credit_hour,assignment,final,total,grade,gpa
 FROM result where id='{$ctrl}'";

$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("Result not Found!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row[0];
$r1=$row[1];
$r2=$row[2];
$r3=$row[3];
$r4=$row[4];
$r5=$row[5];
$r6=$row[6];
$r7=$row[7];
$r8=$row[8];
$r9=$row[9];
$r10=$row[10];

}
?>
<form id="form1" method="POST" action="editeresult.php"  onsubmit='return formValidation()'>
<table bgcolor=white valign="top" style="border:1px solid #336699;width:400px;height:350px;border-radius:15px;box-shadow:1px 8px 8px " align="center">
<tr>
<tr><td><b>Id:</b></td><td><input type='text' name='id' readonly value="<?php echo "$r0"?>" required></td></tr>
<tr><td><b>Student_Id:</b></td><td><input type='text' name='stud_id' value="<?php echo "$r1"?>" required></td></tr>
<tr><td><b>Course Code:</b></td><td ><input type='text' name='course_code' 
value="<?php echo "$r2"?>" required></td></tr>
<tr><td><b>Batch:</b></td><td ><input  type='text' name='year'  value="<?php echo "$r3"?>" required></td></tr>
<tr><td><b>Semester:</b></td><td><input type='number' name='semister' min='1' max='3' value="<?php echo "$r4"?>" required></tr></td>
<tr><td><b>Credit Hour:</b></td><td><input type='text' name='credit_hour' value="<?php echo "$r5"?>" required></tr></td>
<tr><td><b>Assignment:</b></td><td><input type='number' name='assignment' min='0' max='30' value="<?php echo "$r6"?>" required ></tr></td>
<tr><td><b>Final:</b></td><td><input type='number' name='final'  min='0' max='70' value="<?php echo "$r7"?>" required></tr></td>
<tr><td><b>Total:</b></td><td><input type='text' name='total' value="<?php echo "$r8"?>" required></tr></td>
<tr><td><b>Grade:</b></td><td><input type='text' name='total' value="<?php echo "$r9"?>" required></tr></td>
<tr><td><b>GPA:</b></td><td><input type='text' name='total' value="<?php echo "$r10"?>" required></tr></td>
<tr><td colspan=2 align='center'><input type='submit' name='update' value='Update Result' class="button_example"><input type='Reset' value='Reset'></td></tr>
</table>
 <?php
}
?>
 
 <?php
  if(isset($_POST['update']))
  {
                 $id=$_POST['id'];
	            $studid=$_POST['stud_id'];
				$coursecode=$_POST['course_code'];
				$year=$_POST['year'];
				$semester=$_POST['semister'];
				$chour=$_POST['credit_hour'];
				$assigment=$_POST['assignment'];
				$final=$_POST['final'];
				$total=$assigment+$final;		

  if($total>=90)
	{
	$grade="A+";
	$gpa=4;
	}
	
		else if($total>=85)
	{
	$grade="A";
	$gpa=4;
	}
		else if($total>=80)
	{
	$grade="A-";
	$gpa=3.75;
	}
	else if($total>=75)
	{
	$grade="B+";
	$gpa=3.5;
	}
	else if($total>=70)
	{
	$grade="B";
	$gpa=3;
	}
	else if($total>=65)
	{
	$grade="B-";
	$gpa=2.75;
	}
	else if($total>=60)
	{
	$grade="C+";
	$gpa=2.5;
	}
	else if($total>=50)
	{
	$grade="C";
	$gpa=2;
	}
	else if($total>=45)
	{
	$grade="C-";
	$gpa=1.5;
	}
	else if($total>=40)
	{
	$grade="D";
	$gpa=1;
	}
	else if($total>=35)
	{
	$grade="FX";
	$gpa=0;
	}
	else if($total<=35)
	{
	$grade="F";
	$gpa=0;
	}
				
$update = mysql_query("update result set stud_id='$studid',course_code='$coursecode',
year='$year', semister='$semester' ,credit_hour='$chour',assignment='$assigment',final='$final',total='$total',grade='$grade',gpa='$gpa'
  WHERE id='{$id}'");
  if($update){
  echo"<script> alert('Result is updated successfully!');</script>";
   echo "<script>window.location='updateresult.php';</script>";}
   else{echo"Data is not Updated!";}

  }
  ?>
</td>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance ffice  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=415px src="date.php"></iframe><a></center></h2>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan=3 bgcolor=gray>
<table align="center" bgcolor=""><tr><td><font face="Times New Roman" color="white" size="3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Admass University of Collage Distance Eduction Office All Right are Reservd &copy; 2010 E.C. 
&nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</ ~dulla^@204~ 