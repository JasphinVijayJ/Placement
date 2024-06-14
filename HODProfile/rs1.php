<?php
	session_start();
	
	$USN1 = $_POST['USN'];
	$password = $_POST['PASSWORD'];
	$confirm = $_POST['repassword'];
	
	$connect = mysqli_connect('localhost','root','','placement');
	
	if($password == $confirm) {
		if($sql = mysql_query("UPDATE `placement`.`hlogin` SET `Password` ='$password' WHERE `hlogin`.`Username` = '$USN1'"));
		echo "<center>Password Reset Complete</center>";
		session_unset();
	} else
	echo "Update Failed";
?>