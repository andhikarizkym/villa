<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:home.php?pesan=belum_login");
}
include('koneksi.php');
?>

<!DOCTYPE HTML>
<html lang="0">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css"href="css/room.css">


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

    <div class="container">

    <!-- Proses booking dengan mengisi data yang nantinya akan diproses di page proses_booking.php -->
    
        <div class="layout1" style="margin-top: 10%">
            <img src="img/img2.jpg" width="300px" height="200px" style="float: left;">
            <h2>Booking</h2>
            <br>
            <form method="post" action="proses_booking.php">
                <table>
                    <tr>
                        <td>kode_register</td>
                        <td>:</td>
                        <td><input type="int" name="kode"></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><input type="number" name="nik"></td>
                    </tr>
                    <tr>
                        <td>Check In</td>
                        <td>:</td>
                        <td><input type="date" name="checkin"></td>
                    </tr> 
                    <tr>
                        <td>Check Out</td>
                        <td>:</td>
                        <td><input type="date"  name="checkout"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="bayar"></td>
                    </tr>
                </table> 
            </form>
        </div>
    </div>
    <!-- Akhir proses booking -->
    


    <!-- Footer -->
    <footer class="page-footer pt-4 fixed-bottom">

<!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright : Kelompok Tak Jelas 
    </div>
<!-- Copyright -->

    </footer>
<!-- Footer -->