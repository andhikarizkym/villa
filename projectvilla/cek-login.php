<?php
//  mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['email'];
$password = $_POST['pass'];

// menyeleksi data user dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from penyewa where email_penyewa='$username' and password_penyewa='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// Jika Username dan Password yang diinput sesuai dengan isi di database, maka page akan mengarah ke home.php dengan status login.
if($cek > 0){
    $_SESSION['status'] = "login";
    header("location:home.php");
}else{
    header("location:login.php?pesan=gagal");
}
// Jika Username dan Password yang diinput tidak sesuai dengan isi di database, maka page tidak berubah dengan status belum login.