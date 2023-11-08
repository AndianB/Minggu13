<?php 
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');
// get variable from form input
$id = $_POST["id"];
$f_name = $_POST["first_name"];
$l_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$add = $_POST["address"];
$created_at = date('Y-m-d h:i:s');

// Upload Proses
// $target_dir = "images/"; // path directory image akan di simpan
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
// if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
//     echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
// } else {
//     echo "Sorry, there was an error uploading your file.<br>";
// }

$result = mysqli_query($conn, "INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `created_at`) VALUES ('$id', '$f_name', '$l_name', '$email', '$phone', '$add', '$created_at');");

header("Location:index.php");

?>