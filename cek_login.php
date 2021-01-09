<?php
//  mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['user'];
$password = $_POST['pass'];

// menyeleksi data user dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from user where nama_user='$username' and password_user='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['status'] = "login";
    header("location:tabel_data.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>