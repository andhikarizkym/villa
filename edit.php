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
    <h3>EDIT DATA MATA KULIAH</h3>

    <?php
    $kode_mk = $_GET['kodemk'];
    $data = mysqli_query($koneksi, "select * from mk where kode_mk='$kode_mk'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="POST" action="edit_aksi.php">
            <table>
                <tr>
                    <td>KODE MK</td>
                    <td>
                        <input type="number" readonly name="txtkodemk" value="<?php echo $d['kode_mk'];?>">
                    </td>
                </tr>
                <tr>
                    <td>NAMA MK</td>
                    <td>
                        <input type="number" readonly name="txtnamamk" value="<?php echo $d['nama_mk'];?>">
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Praktikan</td>
                    <td>
                        <input type="number" readonly name="txtjmlpraktikan" value="<?php echo $d['jumlah_praktikan'];?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
    <a href="tabel_data.php">KEMBALI</a>
</body>
</html>