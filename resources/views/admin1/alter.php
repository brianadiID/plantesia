<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
				
				echo $_POST['id'];
				echo $_POST['title'];
				echo "<br>";
				echo $_POST['location'];
				echo "<br>";
				echo $_POST['province'];
				echo "<br>";
				echo $_POST['plantation'];
				echo "<br>";
				echo $_POST['yield'];
				echo "<br>";
				echo $_POST['profit'];
				echo "<br>";
				echo $_POST['lattitude'];
				echo "<br>";
				echo $_POST['longitude'];
				echo "<br>";
				echo $_POST['description'];
				echo "<br>";

				$title = $_POST['title'];
				$location = $_POST['location'];
				$province = $_POST['province'];
				$plantation = $_POST['plantation'];
				$yield = $_POST['yield'];
				$profit = $_POST['profit'];
				$lattitude = floatval($_POST['lattitude']);
				$longitude = floatval($_POST['longitude']);
				$description = $_POST['description'];
				$date = date("Y-m-d");
				$id = $_POST['id'];

					$sql = "UPDATE thread
						SET nama='$title', deskripsi= '$description', keuntungan = '$profit', total_yield='$yield', lokasi='$location', jenis='$plantation', tanggal_pembuatan='$date', provinsi='$province', latitude='$lattitude', longitude='$longitude'
						WHERE id = '$id';
					";
					$conn->query($sql);

				
				
				header("location:index.php");
				$conn->close();

			}
?>