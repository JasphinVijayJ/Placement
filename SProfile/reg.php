<?php
if(isset($_POST['submit'])) {
    $Name = $_POST['Fullname'];
    $USN = $_POST['USN'];
    $password = $_POST['PASSWORD'];
    $repassword = $_POST['repassword'];
    $Email = $_POST['Email'];
    $Question = $_POST['Question'];
    $Answer = $_POST['Answer'];

    // Create connection
   include 'config.php';

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if USN already exists
    $checkQuery = "SELECT * FROM slogin WHERE USN='$USN'";
    $checkResult = $conn->query($checkQuery);
    if ($checkResult->num_rows == 0) {
        if ($repassword == $password) {
            // Insert new record
            $insertQuery = "INSERT INTO slogin(Name, USN, PASSWORD, Email, Question, Answer) VALUES ('$Name', '$USN', '$password', '$Email', '$Question', '$Answer')";
            if ($conn->query($insertQuery) === TRUE) {
                echo "You have registered successfully...!! Go back to<br>";
                echo "Login here";
            } else {
                echo "Error: " . $insertQuery . "<br>" . $conn->error;
            }
        } else {
            echo "Your password does not match";
        }
    } else {
        echo "This USN already exists";
    }

    // Close connection
    $conn->close();
}
?>
