<?php
    include('config.php');
    $state = "Login";
    $id = 0;
	$konfirmasi = 0;
	$login_session = "";
    session_start();
    if(isset($_SESSION['login_user'])){
    	$user_check = $_SESSION['login_user'];
	    $sql = "SELECT * FROM user where username = '$user_check';";
		$result = $conn->query($sql);

		if ($result->num_rows == 1) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $login_session = $row["username"];
		        $id = $row["id"];
				$konfirmasi = $row["konfirmasi"];
		        $state = "Logout";
		    }
		} else {
		    $state = "Login";
		}
		$conn->close();
    }
	//session_start();
	if(isset($_SESSION['login_admin'])){
    	$user_check = $_SESSION['login_admin'];
	    $sql = "SELECT * FROM admin where username = '$user_check';";
		$result = $conn->query($sql);

		if ($result->num_rows == 1) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $login_session = $row["username"];
		        $id = $row["id"];
		        $state = "Logout";
		    }
		} else {
		    $state = "Login";
		}
		$conn->close();
    }
    	
    
    
?>