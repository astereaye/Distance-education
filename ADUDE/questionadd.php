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
<link href="../quiz.css" rel="stylesheet" type="text/css"><center>
<?php
extract($_POST);

echo "<BR>";

echo "<BR><center><h3 class=head1 style='font-size:40px;font-family:italic;' align='center'>Add Question  </h3></center>";
if(isset($_POST['submit']))
{
extract($_POST);
mysql_query("insert into mst_question(test_id,que_desc,ans1,ans2,ans3,ans4,true_ans) values ('$testid','$addque','$ans1','$ans2','$ans3','$ans4','$anstrue')") or die(mysql_error());
echo "<p align=center><font color='green' size=4px>Question Added Successfully.</font></p>";
echo' <meta content="4;questionadd.php" http-equiv="refresh" />';

unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.addque.value;
if (mt.length<1) {
alert("Please Enter Question");
document.form1.addque.focus();
return false;
}
a1=document.form1.ans1.value;
if(a1.length<1) {
alert("Please Enter Answer1");
document.form1.ans1.focus();
return false;
}
a2=document.form1.ans2.value;
if(a1.length<1) {
alert("Please Enter Answer2");
document.form1.ans2.focus();
return false;
}
a3=document.form1.ans3.value;
if(a3.length<1) {
alert("Please Enter Answer3");
document.form1.ans3.focus();
return false;
}
a4=document.form1.ans4.value;
if(a4.length<1) {
alert("Please Enter Answer4");
document.form1.ans4.focus();
return false;
}
at=document.form1.anstrue.value;
if(at.length<1) {
alert("Please Enter True Answer");
document.form1.anstrue.focus();
return false;
}
return true;
}
</script><div>
<form name="form1" method="post" onSubmit="return check();">
  <table width="100%"  border="0" align="center" >
    <tr>
      <td width="24%" height="32"><strong>Select Exam Name </strong></td>
      <td width="1%" height="5">  
      <td width="75%" height="32"><select name="testid" id="testid" style="width:340;height:40;">
<?php
$rs=mysql_query("Select * from mst_test order by test_name");
	  while($row=mysql_fetch_array($rs))
{
if($row[0]==$testid)
{
echo "<option value='$row[0]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[0]'>$row[2]</option>";
}
}
?>
      </select>
        
    <tr>
        <td height="26"><strong> Enter Question </strong></td>
        <td>&nbsp;</td>
	    <td><textarea name="addque" cols="60" rows="2" id="addque" style="width:340;height:70;"></textarea></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer1 </strong></td>
      <td>&nbsp;</td>
      <td><input name="ans1" type="text" id="ans1" size="85" maxlength="85" style="width:340;height:30;"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer2 </strong></td>
      <td>&nbsp;</td>
      <td><input name="ans2" type="text" id="ans2" size="85" maxlength="85" style="width:340;height:30;"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer3 </strong></td>
      <td>&nbsp;</td>
      <td><input name="ans3" type="text" id="ans3" size="85" maxlength="85" style="width:340;height:30;"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer4</strong></td>
      <td>&nbsp;</td>
      <td><input name="ans4" type="text" id="ans4" size="85" maxlength="85" style="width:340;height:30;"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter True Answer </strong></td>
      <td>&nbsp;</td>
      <td><input name="anstrue" type="text" id="anstrue" size="50" maxlength="50" style="width:340;height:30;"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" style="width:200;height:30;" ><input type="submit" name="reset" value="Reset" style="width:200;height:30;" ></td>
    </tr>
  </table>
</form></center>
<p ~dulla^@204~ 