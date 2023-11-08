<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('input').on('input', function () {
                var allFilled = true;
                $('input').each(function () {
                    if ($(this).val() === '') {
                        allFilled = false;
                        return false; // Exit the loop if any field is empty
                    }
                });

                if (allFilled == true) {
                    $('#submitBtn').prop('disabled', false);
                } else {
                    $('#submitBtn').prop('disabled', true);
                }
            });
        });
    </script>

</head>
<body>
<?php
include 'koneksi.php';
?>
ADD Customer
<form action="proses_tambah.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>ID Customer</td>
        <td>:</td>
        <td><input type="text" name="id"></td>
    </tr>
    <tr>
        <td>Nama Depan</td>
        <td>:</td>
        <td><input type="text" name="first_name"></td>
    </tr>
    <tr>
        <td>Nama Belakang</td>
        <td>:</td>
        <td><input type="text" name="last_name"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td>Nomor HP Customer</td>
        <td>:</td>
        <td><input type="number" name="phone"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="address"></td>
    </tr>
</table>
<input type="submit" id ="submitBtn" name="Submit" value="Simpan" disabled>
</form>
</body>
</html>