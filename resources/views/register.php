<?php
   include("config.php");
   //echo "lalalala";
   if($_SERVER["REQUEST_METHOD"] == "POST") {		
		echo $_POST['email'];
		echo "<br>";
		echo $_POST['username'];
		echo "<br>";
		echo $_POST['password'];
		echo "<br>";
		echo $_POST['password2'];
		echo "<br>";

		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		if($email != admin or $email != admin){
			if($password == $password2){
				$sql = "INSERT INTO `plantesia`.`user` (`id`, `username`, `email`, `password`, `no_ktp`, `no_telp`, `alamat`, `foto`, `tipe`, `nama`) VALUES ('0', '$username', '$email', '$password', NULL, NULL, NULL, NULL, NULL, NULL);";
				$conn->query($sql);
				// multiple recipients
				$to  = $email;

				// subject
				$subject = 'Confirmation email;';

				// message
				$message = '
				<html>
				<head>
				  <title>Confirmation Email</title>
				</head>
				<body>
				  <p>Please confirm your e-mail address on plantesia.com :</p>
				  <form action="MAILTO:brianadikusumo@gmail.com">
					  <input type="hidden" name="email" value="'.$email.'">
					  <input type="hidden" name="password" value="'.$password.'">
					  <input type="submit" value="Konfirmasi Email Anda Disini">
					</form>
				</body>
				</html>
				';

				// To send HTML mail, the Content-type header must be set
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

				// Additional headers
				$headers .= 'To: $email' . "\r\n";
				$headers .= 'From: Admin Plantesia <admin@plantesia.com>' . "\r\n";

				// Mail it
				mail($to, $subject, $message, $headers);
			}
			
		}
		
		header("location:index.php");
		$conn->close();

	}
?>