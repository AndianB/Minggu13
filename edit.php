<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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
  EDIT DATA
  <?php
    include 'koneksi.php';

    $cust = mysqli_query($conn,"SELECT * from `customer` where id='$_GET[id]'");

    while($c = mysqli_fetch_array($cust)){
        $id = $c["id"];
        $f_name = $c["first_name"];
        $l_name = $c["last_name"];
        $email = $c["email"];
        $phone = $c["phone"];
        $add = $c["address"];
    }
  ?>
  <form action="proses_edit.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>ID Customer</td>
            <td>:</td>
            <td><input type="text" name="id" disabled value="<?php echo $id ?>"></td>
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