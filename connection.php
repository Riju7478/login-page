<?php

$fname = $_POST['fname'];
$mobileno = $_POST['mobileno'];
$email = $_POST['email'];
$lname = $_POST['lname'];


$conn = new mysqli('localhost','root','','login');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(fname, lname, email, mobileno) values(?, ?, ?, ?)");
		$stmt->bind_param("sssi", $fname, $lname, $email, $mobileno);
		$execval = $submit->execute();
		echo $execval;
		echo "Registration successfully...";
		$submit->close();
		$conn->close();
	}


?>