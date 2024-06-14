<?php
session_start();
if (isset($_SESSION['username'])) {
} else {
    header("location: index.php");
}

// Establish database connection
include('includes/config.php');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="../favicon.ico" type="image/icon">
        <link rel="icon" href="../favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Drive Details</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/templatemo-style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <?php
		  $Welcome = "Welcome";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['username']. "</h1>";
		 echo "<br>";
		
		  ?>
        </header>
        <div class="profile-photo-container">
          <img src="../images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
          <ul>
           <li><a href="../login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="../Placement Drives.php" class="active"><i class="fa fa-home fa-fw"></i>Placement Drives</a></li>
            <li><a href="../preferences.php"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li>
            <li><a href="../logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
              
                    <td><a class="white-text templatemo-sort-by">Company Name </a></td>
                    <td><a  class="white-text templatemo-sort-by">Date </a></td>
                    <td><a  class="white-text templatemo-sort-by">C/P</a></td>
                    <td><a  class="white-text templatemo-sort-by">PVenue</a></td>
					   <td><a  class="white-text templatemo-sort-by">SSLC</a></td>
                       <td><a  class="white-text templatemo-sort-by">PU/Dip </a></td>
   <td><a  class="white-text templatemo-sort-by">BE</a></td>               
   <td><a  class="white-text templatemo-sort-by">Backlogs</a></td>
   <td><a  class="white-text templatemo-sort-by">History of Backlogs </a></td>
 
			      <td><a  class="white-text templatemo-sort-by">Deatin years</a></td>
			     
				   <td><a  class="white-text templatemo-sort-by">USN </a></td>
				  <td><a  class="white-text templatemo-sort-by">Name</a></td>
				    
						    <td><a  class="white-text templatemo-sort-by">Placed</a></td>
				     
				    
				  </thead>
			   </tr>
			   
			   <?php
			
$num_rec_per_page=15;
include('includes/config.php');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT a.* , u.*
From addpdrive a,updatedrive u

WHERE a.CompanyName = u.CompanyName AND a.Date = u.Date
 LIMIT $start_from, $num_rec_per_page"; 
$rs_result = $conn->query($sql); //run the query

while ($row = $rs_result->fetch_assoc())
{ 
?>
            <tr> 

<td><p><?php echo $row['CompanyName']; ?></p> </td>
<td><p><?php echo $row['Date']; ?> </p> </td> 
<td><p><?php echo $row['C/P']; ?></p> </td>
<td><p><?php echo $row['PVenue']; ?> </p> </td>
<td><p><?php echo $row['SSLC'] ; ?></p>  </td> 
<td><p><?php echo $row['PU/Dip']; ?> </p> </td>
<td><p><?php echo $row['BE']; ?></p> </td>
<td><p><?php echo $row['Backlogs']; ?></p>  </td>
<td><p><?php echo $row['HofBacklogs']; ?></p> </td>
<td><p><?php echo $row['DetainYears']; ?></p> </td>

<td><p><?php echo $row['USN']; ?> </p> </td> 
<td><p><?php echo $row['Name'];  ?> </p> </td> 

<td><p><?php echo $row['Placed']; ?></p>  </td>

</tr> 
<?php
}
?>

                </tbody>
              </table>  
			  </div>
			  </div>
			  </div>


  <div class="pagination-wrap">
   <ul class="pagination">
			  <?php 
		
$num_rec_per_page=15;
include('includes/config.php');
$sql ="SELECT a.* , u.*
From addpdrive a,updatedrive u

WHERE a.CompanyName = u.CompanyName";

$rs_result = $conn->query($sql); //run the query
$total_records = $rs_result->num_rows;  //count number of records
$totalpage = ceil($total_records / $num_rec_per_page); 

$currentpage = (isset($_GET['page']) ? $_GET['page'] : 1);
	 if($currentpage == 0)
	{
	   
	}
	else if( $currentpage >= 1  &&  $currentpage <= $totalpage  )
	{
	
		if( $currentpage > 1 && $currentpage <= $totalpage)
			{
				
				$prev = $currentpage-1;
				echo "<li><a  href='drivehome.php?page=".$prev."'><</a></li>";
				
			}
	
	if($totalpage > 1){
$prev = $currentpage-1;
	for ($i=$prev+1; $i<=$currentpage+2; $i++){
		echo "<li><a href='drivehome.php?page=".$i."'>".$i."</a></li>";
  }
  }
	if($totalpage > $currentpage  )
	{
		$nxt = $currentpage+1;
		echo "<li><a  href='drivehome.php?page=".$nxt."' >></a></li>";
	}

	 echo "<li><a>Total Pages:".$totalpage."</a></li>";
}

 ?> 
</ul>
</div>

              
            
       
          <footer class="text-right">
          <p>Agni College &copy; 2021 All Rights Reserved | Designed by
              <a href="https://act.edu.in/" target="_parent">JVMKN</a>
			  </p>
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