<?php
  session_start();
 if (isset($_SESSION['pusername'])){
    
	
	   }
   else {
	   header("location: index.php");
   }
   
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center>
<?php
			
$connect = mysqli_connect('localhost','root','', 'placement');
//mysql_select_db('details');
if(isset($_POST['submit']))
{ 
$cname = $_POST['cname'];

$date= $_POST['date'];

$rs_result = $connect->query("SELECT count(Attendence) from updatedrive where Attendence=1 and CompanyName='$cname' and Date='$date'");
$data = mysqli_fetch_assoc($rs_result);
echo "<br>Number of Students Attended&nbsp:&nbsp";
echo $data['count(Attendence)'];

$rs_result = $connect->query("SELECT count(WT) from updatedrive where WT=1 and CompanyName='$cname' and Date='$date'");
$data = mysqli_fetch_assoc($rs_result);
echo "<br>Number of Students Cleared WT&nbsp:&nbsp";
echo $data['count(WT)'];

$rs_result = $connect->query("SELECT count(GD) from updatedrive where GD=1 and CompanyName='$cname' and Date='$date'");
$data = mysqli_fetch_assoc($rs_result);
echo "<br>Number of Students Cleared GD&nbsp:&nbsp";
echo $data['count(GD)'];


$rs_result = $connect->query("SELECT count(Techical) from updatedrive where Techical=1 and CompanyName='$cname' and Date='$date'");
$data = mysqli_fetch_assoc($rs_result);
echo "<br>Number of Students Cleared Technical&nbsp:&nbsp";
echo $data['count(Techical)'];


$rs_result = $connect->query("SELECT count(Placed) from updatedrive where Placed=1 and CompanyName='$cname' and Date='$date'");
$data = mysqli_fetch_assoc($rs_result);
echo "<br>Number of Students Placed&nbsp:&nbsp";
echo $data['count(Placed)'];
}
?>
</center>
</body>
</html>