<?php
   include("config.php");
   session_start();
  
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		/*$sql = "SELECT * FROM user";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "username: " . $row["username"]. " - Email: " . $row["email"]. " Password" . $row["password"]. "<br>";
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();
		*/
		
		echo $_POST['username'];
		echo "<br>";
		echo $_POST['password'];
		echo "<br>";
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM user where username = '$username' and password = '$password';";
		$result = $conn->query($sql);

		$sqladmin = "SELECT * FROM admin where username = '$username' and password = '$password'";
		$resultadmin = $conn->query($sqladmin);
		
		if ($result->num_rows == 1) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "username: " . $row["username"]. " - Email: " . $row["email"]. " Password" . $row["password"]. "<br>";
         		$_SESSION['login_user'] = $username;
         		header("location:index.php");
		    }
		} 
		
		
		else if ($resultadmin->num_rows == 1) {
		    // output data of each row
		    while($row = $resultadmin->fetch_assoc()) {
		        echo "username: " . $row["username"]. " Password " . $row["password"]. "<br>";
         		$_SESSION['login_admin'] = $username;
				header("location:index.php");
		    }
		} 
		
		else {
		    header("location:index.php");
		}
		$conn->close();


	}
?>