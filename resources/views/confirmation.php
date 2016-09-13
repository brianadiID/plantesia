<?php
   include("config.php");
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "UPDATE `user` SET konfirmasi = '1' where email = '$email' and password = '$password';";
		$conn->query($sql);
		$conn->close();
		header("location:index.php");
		
	}
?>