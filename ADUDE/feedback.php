<?php
	include("connection.php");	
?>
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">
<link style="text/css" href="3.css" rel="stylesheet">
  <script language="javascript">
  function check()
  {
   if(document.getElementById("name").value == "")
   {
    alert("please enter your full name !!");
    document.getElementById("name").focus();
    return false;
   }
     if(document.getElementById("email").value =="")
   {
    alert('Please Enter your Email address !!');
    document.getElementById("email").focus();
    return false;
   }
     if(document.getElementById("comment").value =="")
   {
    alert('Please Enter Message !!');
    document.getElementById("comment").focus();
    return false;
   }
  }
 </script>

<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">

</head>
<body>
<table align=center width=1000px height= border="" bgcolor=white>
<tr>
<td height=20px  colspan=4>

<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>

</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
   <li><a href="index.php">Home</a></li>
   <li><a href="About.php">About Us</a></li>
   <li><a href="register.php">Apply</a></li>
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
	
	<li><a href="Contact.php">Contact as</a></li>
	<li><a href="feedback.php">Feedback</a></li>
	<li><a href="help.php">Help</a></li>
	<li><a href="new1.php">Anounncment</a><li>
	<li><a href="login.php">Login</a></li>
 </div> 
</td>
</tr>
<tr>
<td  width=150px bgcolor="#E5E4E2" valign=top>
<table   bgcolor="#E5E4E2" border=0  width="150" height="300" class="menu-bar" align="center">
<tr >
<td width="110" height="20"><b><font color="white">

<tr>
<td width="110" height="20"><b><font color="white">
<a href="dir.php" link="white" >office director </a></font></b></td>
<tr>
 <td width="150" height="20">
 <a href="regulation.php" id="drop"><b>Rule and Regulation</b></a></td>
</tr>

<tr>
<td>
<img src="b3.gif" width="200" height="150">


    </td>
   </tr>
   </table>
</td>
<td bgcolor="" valign="top"><br><br><br><br>
<!--------body  ---> 
<script language="javascript">
function formValidation(){
//assign the fields
var name = document.getElementById('name');
var email=document.getElementById('email');
var comment = document.getElementById('comment');
if(emailValidator(email,"check your E-mail format")){
if(isAlphabet(name, "please enter Your full name in letters only")){
if(lengthRestriction(name, 8, 30,"for your full name")){
if(lengthRestriction(comment, 3, 50,"for your comment")){
	return true;
	}}}
	}	
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
	</script>
	
<form method="post" action="feedback.php" name="aform" onsubmit='return formValidation()'>
     <table  valign="top" style="border:1px solid #336699;width:400px;height:200px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
 <tr valign="top">
     <td><b><font size="4px">Name:</font></b></td><td>
	 <input name="name" size="32" id="name" type="text" placeholder="Your name"></td>
     </tr>
     <tr>
     <td width="850"><b><font size="4px">Email:</font></b></td><td><input name="email" size="32" id="email" type="text" placeholder="Enter Your Email"></td>
     </tr>
     <tr>
     <td colspan="2"><center><b><font size="4px">Write  Comment here</font></b></center></td>
     </tr>
     <tr>
     <td colspan="2"><center><textarea name="comment" id="comment" placeholder="Write comment here" cols="34" rows="2"></textarea></center></td>
     </tr>
     <tr>
     <td colspan="2"><center><input value="Send" name="sent" type="Submit" Onclick="return check(this.form);"/><input value="Reset" type="Reset"></center></td>
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

$sql="INSERT INTO feedback (name,Email, comment )
VALUES
('$_POST[name]','$_POST[email]','$_POST[comment]')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo"<img src='correct.jpg' width='40' height='30'>Your comment has been Successfully sent!!";
echo' <meta content="4;feedback.php" http-equiv="refresh" />';
}
//mysql_close($conn)
?>
</td>
<td width=150px>
<table border=0 width=100px height="" bgcolor=white>
<tr>
<td valign=top bgcolor="#E5E4E2">
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance Office  works for change!!</font><br>
<font color="white"><iframe name="frame" width=300px height=380px src="date.php"></iframe><a></center></h2>
<a href="https://www.facebook.com">  <img src="f.png" width="88" height="44"></a>
<a href="https://www.youtube.com"><img src="y.png" width="88" height="44"></a>
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
</ ~dulla^@204~ 