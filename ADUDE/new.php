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
  <script language="javascript">
  function check()
  {
   if(document.getElementById("dates").value == "")
   {
    alert("Firest Enter your date!!");
    document.getElementById("dates").focus();
    return false;
   }
     if(document.getElementById("types").value =="")
   {
    alert('Firest Enter information types!!');
    document.getElementById("types").focus();
    return false;
   }
     if(document.getElementById("info").value =="")
   {
    alert('Firest wright your information!!');
    document.getElementById("info").focus();
    return false;
   }
  }
 </script>
</head>
<body>
<table align=center width=1000px height= border="6">
<tr>
<td height=20px  colspan=4>
<img src="2.jpg" width="140px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="140px" height="50" >
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
<li><a href="notice.php" link="white" >Post notice </a></li>
<li><a href="new2.php" link="white" >Delet Announcment</a></li>
		</ul>
		</li>
				<li><a href="#">View</a>
      <ul>
<!--<li><a href="rep11.php" >View Report</a></li>-->
<li><a href="viewcomment.php" >View Comments</a></li>
<li><a href="assigncourse.php" >View Assigned course</a></li>
<!---<li><a href="assign.php" link="white" >Assign Insturacor</a></li>-->

</ul>
</li>
<li><a href="changepassword5.php" >Change Password</a></li>   
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp;";?><?php echo $_SESSION['b'];?>)</a></li>	
    </div>
</td>
</tr>

<td  valign="top" bgcolor="white">
<!--------body  --->
<script language="javascript">
function formValidation(){
//assign the fields
var dates = document.getElementById('dates');
var types=document.getElementById('types');
var info = document.getElementById('info');
if(isNumeric(dates ,"pleas enter date of the information"){
if(isAlphabet(types, "Enter information types in letter only")){
if(lengthRestriction(types, 3, 30,"for your information types")){
if(isAlphabet(info, "Wright information  in letter only")){
if(lengthRestriction(info, 3, 30,"for your information")){
	return true;
	}}}}}	
return false;		
}	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
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
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
	</script></br>
	<h2><center>POST Information</center></h2>
<form method="post" action="new.php" name="aform" onsubmit='return formValidation()'>
     <table bgcolor=white valign="top" style="border:1px solid #336699;width:540px;height:150px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
 <tr valign="top">
     <td><b><font size="4px">Dates:</font></b></td><td>
	 <input name="dates" id="name" type="date" placeholder="Dates" style="width:240; height:30;"></td>
     </tr>
     <tr>
     <td><b><font size="4px">Info Type:</font></b></td><td><input name="types"  id="types" style="width:240; height:30;" type="text" placeholder="Information type"></td>
     </tr>
     <tr>
     <td colspan="2"><center><b><font size="4px">Write  Information </font></b></center></td>
     </tr>
     <tr>
     <td colspan="2"><center><textarea name="info" id="info" placeholder="Write Information here" cols="50" rows="4"></textarea></center></td>
     </tr>
     <tr>
     <td colspan="2"><center><input value="Post here" name="sent" type="Submit" Onclick="return check(this.form);"/><input value="Reset" type="Reset"></center></td>
     </tr>
     </body></table>
</form>


<?php
 if(isset($_POST['sent']))
 {
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","cde");
$conn=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("cde", $conn);
$sql="INSERT INTO userinfo VALUES('$_POST[dates]','$_POST[types]','$_POST[info]')";
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo"<img src='correct.jpg' width='40' height='30'>Your information has been Successfully posted!!";
echo' <meta content="4;new.php" http-equiv="refresh" />';
}
//mysql_close($conn)
?>
</td>
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
Admass University of Collage Distance Eduction Office All Right are Reservd &copy; 2010 E.C. 
 &nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</bo ~dulla^@204~ 