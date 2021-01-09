<!-- cek apakah sudah login -->
<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
}

// menghubungkan dengan koneksi
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Edit Data</title>
</head>
<body>
    <h3>TAMBAH DATA MATA KULIAH</h3>
    <form method="POST" action="edit_aksi.php">
        <table>
            <tr>
                <td>KODE MK</td>
                <td>
                    <input type="number" name="txtkodemk">
                </td>
            </tr>
            <tr>
                <td>NAMA MK</td>
                <td>
                    <input type="text" name="txtnamamk">
                </td>
            </tr>
            <tr>
                <td>Jumlah Praktikan</td>
                <td>
                    <input type="number" name="txtjmlpraktikan">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <br>
    <a href="tabel_data.php">KEMBALI</a>
</body>
</html>