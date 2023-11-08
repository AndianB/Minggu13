<?php 
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');

// get variable from form input
$f_name = $_POST["first_name"];
$l_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$add = $_POST["address"];
$updated_at = date('Y-m-d H:i:s');

// Upload Proses
// if($_FILES["fileToUpload"]["size"]!=0){   // Jika browse image di tekan maka $_FILES akan terisi
//     $target_dir = "images/"; // path directory image akan di simpan
//     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
//         echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
//     } else {
//         echo "Sorry, there was an error uploading your file.<br>";
//     }
// }

$result = mysqli_query($conn, "UPDATE `customer` set `first_name` = '$f_name', `last_name` = '$l_name', `email` = '$email', `phone` = '$phone', `address` = '$add', `updated_at` = '$updated_at' where `id` = '$_GET[id]'");

header("Location:index.php");

?>