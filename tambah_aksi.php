<?php
//  koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$kode_mk = $_POST['txtkodemk'];
$nama_mk = $_POST['txtnamamk'];
$jumlah_praktikan = $_POST['txtjmlpraktikan'];

// menginput data ke database
mysqli_query($koneksi, "insert into mk values('$kode_mk', '$nama_mk', '$jumlah_praktikan')");

//mengalihkan halaman kembali ke index.php
header("location:tabel_data.php")

?>