<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'koneksi.php';
                // $query = mysqli_query($conn, "SELECT `o`.`id` AS ID, `o`.`order_date` AS Tanggal_Pemesanan, CONCAT(`c`.`first_name`, ' ', `c`.`last_name`) AS Nama_Pemesan, `c`.`address` AS Alamat, `c`.`phone` AS No_HP, `p`.`name` AS Nama_Barang, `p`.`price` AS Harga_Barang, `op`.`qty` AS Jumlah_Barang, `p`.`price` * `op`.`qty` AS Total_Harga FROM `order_product` AS op JOIN `order` AS o ON `op`.`order_id` = `o`.`id` JOIN `customer` AS c ON `o`.`customer_id` = `c`.`id` JOIN `product` AS p ON `op`.`product_id` = `p`.`id` ORDER BY order_date DESC;");
                $query = mysqli_query($conn, "SELECT * FROM `customer` ORDER BY `created_at` asc;");
                ?>
               <center><h1>DATA CUSTOMER:</h1> </center>
                <a class="btn btn-info" style="margin-bottom:5px" href="tambah.php?nama_halaman=NAMA HALAMAN NYA"> Daftarkan Customer </a> 
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>
                            ID Customer
                        </th>
                        <th>
                            Tanggal Pendaftaran
                        </th>
                        <th>
                            Tanggal Update Data
                        </th>
                        <th>
                            Nama Depan
                        </th>
                        <th>
                            Nama Belakang
                        </th>
                        <th>
                            Alamat Email
                        </th>
                        <th>
                            Nomor HP Customer
                        </th>
                        <th>
                            Alamat Customer
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>
                        <?php 
                        if(mysqli_num_rows($query)>0){ 
                        $no = 1;
                        while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td> <?php echo $data["id"] ?></td>
                            <td> <?php echo $data["created_at"] ?></td>
                            <td> <?php echo $data["updated_at"] ?></td>
                            <td> <?php echo $data["first_name"] ?> </td>
                            <td> <?php echo $data["last_name"] ?> </td>
                            <td> <?php echo $data["email"] ?></td>
                            <td> <?php echo $data["phone"] ?></td>
                            <td> <?php echo $data["address"] ?></td>
                            <td> <a href="proses_hapus.php?id=<?php echo $data["id"] ?>" class="label label-danger"> Delete </a> &nbsp; <a href="edit.php?id=<?php echo $data["id"] ?>" class="label label-warning"> Ubah </a></td>
                        </tr>
                        <?php } ?>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>