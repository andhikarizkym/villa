<?php
include('koneksi.php');

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/about.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200&display=swap" rel="stylesheet">

    <title>Archana Villa</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="home.php">Archana Villa</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto mr-2">
                <a class="nav-link active mr-2" href="home.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link mr-2" href="room.php">Rooms</a>
                <a class="nav-link mr-2" href="about.php">About Us</a>
                <a class="nav-link mr-2" href="login.php">Login</a>
            </div>
        </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <h2></h2>

    <table border="1" width='700px'>
        <tr>
            <th>NO</th>
            <th>Koder Register</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Check In</th>
            <th>Check Out </th>
            <th>Edit</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi,"select * from transaksi");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_register']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nik']; ?></td>
                <td><?php echo $d['tgl_sewa']; ?></td>
                <td><?php echo $d['tgl_selesai']; ?></td>
                <td><a href=""></a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    
    
    
    
    <!-- Footer -->
    <!-- <footer footer class="page-footer pt-4"> -->

    <!-- Copyright -->
    <!-- <div class="footer-copyright text-center py-3">© 2020 Copyright: -->
        <!-- <a style="color:black; text-decoration: underline;" href="https://linktr.ee/yonseira">Yonseira Team</a>  -->
    <!-- </div> -->
    <!-- Copyright -->

    <!-- </footer> -->
    <!-- Footer -->