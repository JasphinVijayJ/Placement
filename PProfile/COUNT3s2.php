<?php
  session_start();
 if (isset($_SESSION['pusername'])){
    echo "Welcome, ".$_SESSION['pusername']."!";
	   }
   else {
	   header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QUERIES</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  <div class="bg">
   <div class="templatemo-content-container">
  <div class="templatemo-content-widget no-padding">
<?php
$connect = mysqli_connect('localhost','root','','placement');
// mysql_select_db('details');
if(isset($_POST['s2']))
{
$Susn = $_POST['susn'];
$RESULT = $connect->query("SELECT * FROM basicdetails WHERE USN='$Susn'");
$row = $RESULT->fetch_assoc();
echo "<br><h3>Details of Student '$Susn'&nbsp:&nbsp";
echo "</h3>";

print "<center><table>";
print "<tr>";
print "<td>First Name: " . (isset($row['FirstName']) ? $row['FirstName'] : '') . "</td></tr>";
print "<tr><td>Last Name: " . (isset($row['LastName']) ? $row['LastName'] : '') . "</td></tr>";
print "<tr><td>USN: " . (isset($row['USN']) ? $row['USN'] : '') . "</td></tr>";
print "<tr><td>Mobile: " . (isset($row['Mobile']) ? $row['Mobile'] : '') . "</td></tr>";
print "<tr><td>Email: " . (isset($row['Email']) ? $row['Email'] : '') . "</td></tr>";
print "<tr><td>DOB: " . (isset($row['DOB']) ? $row['DOB'] : '') . "</td></tr>";
print "<tr><td>Semester: " . (isset($row['Sem']) ? $row['Sem'] : '') . "</td></tr>";
print "<tr><td>Branch: " . (isset($row['Branch']) ? $row['Branch'] : '') . "</td></tr>";
print "<tr><td>SSLC Percentage: " . (isset($row['SSLC']) ? $row['SSLC'] : '') . "</td></tr>";
print "<tr><td>PU/Diploma Percentage: " . (isset($row['PU/Dip']) ? $row['PU/Dip'] : '') . "</td></tr>";
print "<tr><td>BE Aggregate: " . (isset($row['BE']) ? $row['BE'] : '') . "</td></tr>";
print "<tr><td>Current Backlogs: " . (isset($row['Backlogs']) ? $row['Backlogs'] : '') . "</td></tr>";
print "<tr><td>History of Backlogs: " . (isset($row['HofBacklogs']) ? $row['HofBacklogs'] : '') . "</td></tr>";
print "<tr><td>Detain Years: " . (isset($row['DetainYears']) ? $row['DetainYears'] : '') . "</td></tr>";
print "</table></center>";

}
?>
<footer class="text-right">

					<p>Agni College &copy; 2021 All Rights Reserved | Designed by
              <a href="https://act.edu.in/" target="_parent">JVMKN</a>

          </footer>
        </div>
      </div>
    </div>
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();
      });
    </script>
	</body>
	</html>
