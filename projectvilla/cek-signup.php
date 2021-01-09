<?php

// menghubungkan dengan koneksi
include "koneksi.php";

// menangkap data yang dikirim dari form
$email_penyewa = $_POST ['email'];
$password_penyewa = $_POST ['password'];

// memasukkan data username dan password kedalam table database penyewa
mysqli_query($koneksi,"insert into penyewa values('$email_penyewa','$password_penyewa')");

// jika sudah selesai proses sign up, maka page akan diarahkan ke login.php
header("location:login.php");
?>