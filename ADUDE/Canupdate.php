<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="file:///D|/Style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="container">
  <div id="rightside"></div>
<div id="mainbody">
<p align="center">Update Candidate Information Here </p>
 <h2><script language="javascript" type="text/javascript">
function validate()
{
if(document.getElementById("Firstname").value=="")
{
alert("Please Enter Your First Name");
document.getElementById("Firstname").focus();
return false;
}

if(!(isNaN(document.registration.Firstname.value)))
{
alert("First Name has character only!");
return false;
}

if(document.getElementById("Lastname").value=="")
{
alert("Please Enter Your Lastname");
document.getElementById("Lastname").focus();
return false;
}

if(!(isNaN(document.registration.Lastname.value)))
{
alert("Last name has character only!");
return false;
}

if(document.getElementById("Cid").value=="")
{
alert("Please Enter Your ID No");
document.getElementById("Cid").focus();
return false;
}

if(!(!(document.registration.Cid.value.match(num))))
{
alert("ID No has number only!");
return false;
}

if(document.getElementById("Age").value=="")
{
alert("Please Enter Your Age");
document.getElementById("Age").focus();
return false;
}

if(!(isNaN(document.registration.Age.value)))
{
alert("Age has number only!");
return false;
}

if(document.getElementById("Gender").value=="")
{
alert("Please Enter Your Sex");
document.getElementById("Gender").focus();
return false;
}

if((isNaN(document.registration.Gender.value)))
{
alert("Gender has character only!");
return false;
}

if(document.getElementById("Department").value=="")
{
alert("Please Enter Your Department");
document.getElementById("Department").focus();
return false;
}

if(!(isNaN(document.registration.Department.value)))
{
alert("Department has character only!");
return false;
}
if(document.getElementById("Phone").value=="")
{
alert("Please Enter your phone number");
document.getElementById("Phone").focus();
return false;
}
if((isNaN(document.registration.Phone.value)))
{
alert("Phone number has numeric only!");
return false;
}
var emailPat=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
var emailid=document.getElementById("Email").value;
var matchArray = Emailid.match(EmailPat);
if (matchArray == null)
{
alert("Your email address seems incorrect. Please try again.");
document.getElementById("Email").focus();
return false;
}
if(document.getElementById("Year").value=="")
{
alert("Please Enter the Year");
document.getElementById("Year").focus();
return false;
}
if(document.getElementById("Photo").value=="")
{
alert("Please take Your Poto");
document.getElementById("Photo").focus();
return false;
}
if(document.getElementById("Deiscription").value=="")
{
alert("Please Enter Your Unique information");
document.getElementById("Description").focus();
return false;
}

if(!(isNaN(document.registration.Description.value)))
{
alert("Description has character only!");
return false;
}
return true;
}
  </script>
<form action="file:///D|/Cu.php" method="post" enctype="multipart/form-data" name="Registration" id="Registration" onsubmit="return validate();">
    <table border="1" width="50" height="436" bgcolor="#FFFF99" align="center">
      <tr>
    <td colspan="2"><div align="center">
      <h3>Candidates Registration Form </h3>
    </div></td>
    </tr>
	<tr>
    <td width="179"><div align="left">      <strong>Firstname<em>*</em></strong>    </div></td>
    <td><strong>
     <label>
        <input name="Firstname" type="text" id="Firstname" />
    </label>
    </strong></td>
  </tr>
  <tr>
    <td width="179"><div align="left">      <strong>Lastname <em>*</em></strong>    </div></td>
    <td><strong>
      <label>
        <input name="Lastname" type="text"  id="Lastname" />
      </label>
    </strong></td>
  </tr>
  <tr>
    <td width="179"><div align="left">      <strong>Cid<em>*</em></strong>    </div></td>
    <td><strong>
      <label>
        <input name="Cid" type="text" id="Cid" />
      </label>
    </strong></td>
  </tr>
  <tr>
    <td width="179"><div align="left">      <strong>Age<em>*</em></strong>    </div></td>
    <td><strong>
      <label>
        <input name="Age" type="text" id="Age" />
      </label>
    </strong></td>
  </tr>
  <tr>
    <td width="179" height="61"><div align="left">      <strong>Gender<em>*</em></strong>    </div></td>
    <td><strong>
      <label>
        <select name="Gender" size="1" id="Gender">
          <option selected="selected">select</option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </label>
    </strong></td>
  </tr>
  <tr>
    <td width="179"><div align="left">      <strong>Department<em>*</em></strong>    </div></td>
    <td><strong>
      <label>
        <select name="Department" size="1" id="Department">
          <option value="Select" selected="selected">Select</option>
          <option value="Information science">Information science</option>
          <option value="Computer science">Computer science</option>
          <option value="Biology">Biology</option>
          <option value="Economics">Economics</option>
          <option value="Management">Management</option>
          <option value="Vet. medicine">Vet. medicine</option>
          <option value="Physics">Physics</option>
          <option value="Chemistry">Chemistry</option>
          <option value="Geology">Geology</option>
          <option value="Vet. phamacy">Vet. phamacy</option>
          <option value="Maths">Maths</option>
          <option value="Hotel management">Hotel management</option>
        </select>
      </label>
    </strong></td>
  </tr>
	<tr>
    <td width="179"><div align="left">      <strong>Phone<em>*</em></strong>    </div></td>
    <td><strong>
      <label>
        <input name="Phone" type="text" id="Phone" />
      </label>
    </strong></td>
  </tr>
  <tr>
    <td><div align="left">      <strong>Email<em>*</em></strong>    </div></td>
    <td><strong>
      <label>
        <input name="Email" type="text" id="Email" />
      </label>
    </strong></td>
  </tr>
  <tr>
    <td><div align="left">      <strong>Year<em>*</em></strong>    </div></td>
    <td><strong>
      <label>
        <select name="Year" size="1" id="Year">
          <option value="Select">Select</option>
          <option value="1st">1st</option>
          <option value="2nd">2nd</option>
          <option value="3rd">3rd</option>
          <option value="4th">4th</option>
          <option value="5th">5th</option>
          <option value="6th">6th</option>
        </select>
      </label>
    </strong></td>
    
  </tr>
  <tr>
    <td><div align="left">
      <label for="Photo"><strong>Photo</strong></label>
    </div></td>
    <td><input type="file" name="Photo" id="Photo" /></td>
  </tr>
  <tr>
    <td width="179"><div align="left">      <strong>Description<em>*</em></strong>    </div></td>
    <td><strong>
      <label>
        <textarea name="Description" id="Description" cols="45" rows="5"></textarea>
      </label>
    </strong></td>
    
  </tr>
   <tr align="center">
     <td colspan="2"><label>
       <input type="reset" name="Reset" value="Reset" />
       <input type="submit" name="Submit" value="Update" />
     </label>     </td>
   </tr>
 </table>
</form>
</div>
<div id="footer"></div>
</div>
</ ~dulla^@204~ 