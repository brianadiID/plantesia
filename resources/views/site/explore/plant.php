<?php
   include("../../config.php");
   echo "lalalala";
   $date = date("Y-m-d H:i:s");
   if($_SERVER["REQUEST_METHOD"] == "POST") {		
		echo $_POST['input'];
		echo $_POST['komentar'];
		
		$id = $_POST['input'];
		$komentar = $_POST['komentar'];
		$id_thread = $_POST['id_thread']; 
		
		
		
		$sql = "INSERT INTO `plantesia`.`pesan` (`id`, `id_user`, `id_thread`, `time`, `isi`) VALUES ('0', '$id', '$id_thread', '$date', '$komentar');";
		$conn->query($sql);
		
		header("location:index.php");
		
		$conn->close();
	}
?>