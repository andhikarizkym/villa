<?php

// menghubungkan dengan koneksi
include ("koneksi.php");

// menangkap data yang dikirim dari form
$kode_register = $_POST ['kode'];
$nama = $_POST ['nama'];
$nik = $_POST ['nik'];
$tgl_sewa = $_POST ['checkin'];
$tgl_selesai = $_POST ['checkout'];

// memasukkan data kedalam table database transaksi
mysqli_query($koneksi,"insert into transaksi values('$kode_register','$nama','$nik','$tgl_sewa','$tgl_selesai')");

// Jika proses pengisian data booking berhasil, maka page akan dialihkan ke page berhasi.php
header("location:berhasil.php");
?>