<?php 
	include("config.php");
	$somevar = $_GET["uid"];
	//echo $somevar;
	$id = explode(",", $somevar);
	$length = count($id);
	for ($x = 1; $x < $length; $x++) {
    	echo $id[$x];
    	$temp = $id[$x];
    	
		$sql = "DELETE FROM thread
				WHERE id = $temp;
				";
		$conn->query($sql);
	} 
	header("location:index.php");
	$conn->close();
?>