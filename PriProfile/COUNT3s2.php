<?php
  session_start();
 if (isset($_SESSION['priusername'])){
    
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
$connect = mysqli_connect('localhost', 'root', '', 'placement');
if (!$connect) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['s2'])) {
    $Susn = $_POST['susn'];
    $query = "SELECT * FROM basicdetails WHERE USN='$Susn'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            echo "<br><h3>Details of Student '$Susn'&nbsp:&nbsp";
            echo "</h3>";
            echo "<center><table>";
            echo "<tr>";
            echo "<td>First Name: " . $row['FirstName'] . "<br></td>";
            echo "<td>Last Name: " . $row['LastName'] . "<br></td>";
            echo "<td>USN: " . $row['USN'] . "<br></td>";
            echo "<td>Mobile: " . $row['Mobile'] . "<br></td>";
            echo "<td>Email: " . $row['Email'] . "<br></td>";
            echo "<td>DOB: " . $row['DOB'] . "<br></td>";
            echo "<td>Semester: " . $row['Sem'] . "<br></td>";
            echo "<td>Branch: " . $row['Branch'] . "<br></td>";
            echo "<td>SSLC Percentage: " . $row['SSLC'] . "<br></td>";
            echo "<td>PU/Diploma Percentage: " . $row['PU/Dip'] . "<br></td>";
            echo "<td>BE Aggregate: " . $row['BE'] . "<br></td>";
            echo "<td>Current Backlogs: " . $row['Backlogs'] . "<br></td>";
            echo "<td>History of Backlogs: " . $row['HofBacklogs'] . "<br></td>";
            echo "<td>Detain Years: " . $row['DetainYears'] . "<br></td>";
            echo "</tr>";
            echo "</table></center>";
        } else {
            echo "No student found with the given USN.";
        }
    } else {
        echo "Query failed: " . mysqli_error($connect);
    }

    mysqli_close($connect);
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