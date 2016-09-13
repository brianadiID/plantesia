<?php
include("config.php");
$id = 
$target_dir = "../img/assets/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$target_file = $target_dir . rand() . "plnt.jpg";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $target_file = $target_dir . rand() . rand() . "plnt.jpg";
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 32000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

			if($_SERVER["REQUEST_METHOD"] == "POST") {
				
				echo $_POST['id'];
			$target_file;
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
				echo $_POST['longutide'];
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
				$longutide = floatval($_POST['longutide']);
				$description = $_POST['description'];
				$date = date("Y-m-d");
				if($password == $password2){
					$sql = "INSERT INTO `plantesia`.`thread` (`id`, `nama`, `deskripsi`, `keuntungan`, `total_yield`, `lokasi`, `jenis`, `foto`, `tanggal_pembuatan`, `provinsi`, `latitude`, `longitude`) VALUES ('0', '$title', '$description', '$profit', '$yield', '$location', '$plantation', '$target_file', '$date', '$province', '$lattitude', '$longutide');";
					$conn->query($sql);
				}
				
				header("location:index.php");
				$conn->close();

			}
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>