<?php
// koneksi database
include 'koneksi.php';

//
$kode_mk = $_POST['txtkodemk'];
$nama_mk = $_POST['txtnamamk'];
$jumlah_praktikan = $_POST['txtjmlpraktikan'];

// 
mysqli_query($koneksi, "insert into mk set nama_mk='$nama_mk', jumlah_praktikan='$jumlah_praktikan' where kode_mk='$kode_mk'");

//
header("location:tabel_data.php");
?>