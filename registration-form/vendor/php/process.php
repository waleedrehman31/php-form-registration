<?php 
include 'database.php'; 

if (isset($_POST['add'])) {
		$fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password= $_POST['password'];
    // $hashedPassword = password_hash($password);

		/*
		* Submit Data to Database
		*/ 
		$query = "INSERT INTO tblusers (Name, Email, Password) VALUES ('$fullName', '$email', '$password')";
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		if ($insert_row) {
			$message = "User Successfullt Inserted";
			header('Location: ../../index.php?message='.urlencode($message));
		};
	};
?>