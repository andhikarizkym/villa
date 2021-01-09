<?php

// mengkoneksikan php ke database
$koneksi = mysqli_connect("localhost","root","","villa");

// Cek Koneksi
if (mysqli_connect_errno())
{
    echo "koneksi database gagal :" . mysqli_connect_error();
}
// Jika koneksi gagal, page akan tertulis koneksi database gagal.
?>