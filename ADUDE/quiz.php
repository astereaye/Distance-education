<?php
 
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
 }?>
 <?php
include("connection.php"); 
extract($_POST);
extract($_GET);
extract($_SESSION);
if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[sid]))
{
	header("location: exam_index.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/quiz.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function timeout()
	{
		var hours=Math.floor(timeLeft/3600);
		var minute=Math.floor((timeLeft-(hours*60*60)-30)/60);
		var second=timeLeft%60;
		var hrs=checktime(hours);
		var mint=checktime(minute);
		var sec=checktime(second);
		if(timeLeft<=0)
		{
			clearTimeout(tm);
			document.getElementById("form1").submit();
		}
		else
		{

			document.getElementById("time").innerHTML=hrs+":"+mint+":"+sec;
		}
		timeLeft--;
		var tm= setTimeout(function(){timeout()},1000);
	}
	function checktime(msg)
	{
		if(msg<10)
		{
			msg="0"+msg;
		}
		return msg;
	}
	</script>
  

</head>

<body onload="timeout()">
	  <script type="text/javascript">
		  var timeLeft=1*60*60;
		  
		  </script>
		  
		  <div id="time"style="float:right">timeout</div></h2>
		<?php
		$i=1;
	 
		
			?> 
		<form method="post" id="form1" action="answer.php">
		  <table class="table table-bordered">
			<thead>
			  <tr class="danger">
			  </tr>
			</thead>
			
			<tbody>
			<?php if(isset($qust['ans1'])){?>
			  <tr class="info">
				<td>&nbsp;1&emsp;<input type="radio" value="0"  />&nbsp;<?php echo $qust['ans1'];?> </td>
			  </tr>
			<?php }?>
			<?php if(isset($qust['ans2'])){?>
			  <tr class="info">
				<td>&nbsp;2&emsp;<input type="radio" value="1"  />&nbsp;<?php echo $qust['ans2'];?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['ans3'])){?>
			  <tr class="info">
				<td>&nbsp;3&emsp;<input type="radio" value="2"  />&nbsp;<?php echo $qust['ans3'];?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['ans4'])){?>
			  	<tr class="info">
				<td>&nbsp;4&emsp;<input type="radio" value="3"  />&nbsp;<?php echo $qust['ans4'];?></td>
			  </tr>
			  <?php }?>
			<tr class="info">
				<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['id']; ?>" /></td>
			  </tr>
			</tbody>
			
		  </table>
		<?php $i++;?>		
</form>
<?php
$query="select * from mst_question";
$rs=mysql_query("select * from mst_question where test_id=$tid") or die(mysql_error());
if(!isset($_SESSION['qn']))
{
	$_SESSION['qn']=0;
	mysql_query("delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
	$_SESSION['trueans']=0;
	
}
else
{	
		if(@$submit=='Next Question' && isset($ans))
		{
				mysql_data_seek($rs,$_SESSION['qn']);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into mst_useranswer values ('$_SESSION[a]', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION['trueans']=$_SESSION['trueans']+1;
				}
				$_SESSION['qn']=$_SESSION['qn']+1;
		}
		else if(@$submit=='Get Result' && isset($ans))
		{
				mysql_data_seek($rs,$_SESSION['qn']);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into mst_useranswer values ('$_SESSION[a]', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION['trueans']=$_SESSION['trueans']+1;
				}
				echo "<h1 class=head1><center><font shadow>Result</center></h1>";
				$_SESSION['qn']=$_SESSION['qn']+1;
				echo "<Table align=center><tr class=tot><td color=blue><font color=blue size=6px>Total Question<td> </font>$_SESSION[qn]";
				echo "<tr class=tans><td color=green><font color=green size=6px>True Answer<td ></font>".$_SESSION['trueans'];
				$w=$_SESSION['qn']-$_SESSION['trueans'];
				echo "<tr class=fans><td color=red><font color=red size=6px>Wrong Answer</font><td> ". $w;
				echo "</table>";
				mysql_query("insert into mst_result values('$_SESSION[a]','$tid','".date("d/m/Y")."','$_SESSION[trueans]')") or die(mysql_error());
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION['qn']);
				unset($_SESSION[sid]);
				unset($_SESSION['tid']);
				unset($_SESSION['trueans']);
				exit;
		}
}
$rs=mysql_query("select * from mst_question where test_id=$tid",$conn) or die(mysql_error());
if($_SESSION['qn']>mysql_num_rows($rs)-1)
{
unset($_SESSION['qn']);
echo "<h1 class=head1>Some Error  Occured</h1>";
//session_destroy();
echo "Please <a href=exam_index.php> Start Again</a>";

exit;
}
mysql_data_seek($rs,$_SESSION['qn']);
$row= mysql_fetch_row($rs);
echo "<form name=myfm id=form1 method=post action=quiz.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0 align='center'>";
$n=$_SESSION['qn']+1;
echo "<tR><td><span class=style2>Que ".$n.": $row[2]</style>";
echo "<tr><td ><input type=radio name=ans value='1'>$row[3]";
echo "<tr><td > <input type=radio name=ans value='2'>$row[4]";
echo "<tr><td ><input type=radio name=ans value='3'>$row[5]";
echo "<tr><td ><input type=radio name=ans value='4'>$row[6]";

if($_SESSION['qn']<mysql_num_rows($rs)-1)
echo "<tr><td><input type='submit' name=submit value='Next Question'></form>";
else
echo "<tr><td><input type='submit' name=submit value='Get Result'></form>";
echo "</table> ~dulla^@204~ 