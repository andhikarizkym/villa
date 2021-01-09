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
<html>
<head>
    <title>Halaman Tabel Data</title>
</head>
<body>
    <h2>CRUD DATA MATA KULIAH</h2>
    <br>
    <a href="tambah.php">TAMBAH DATA</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Kode MK</th>
            <th>Nama MK</th>
            <th>Jumlah Praktikan</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi,"select * from mk");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_mk']; ?></td>
                <td><?php echo $d['nama_mk']; ?></td>
                <td><?php echo $d['jumlah_praktikan']; ?></td>
                <td>
                    <a href="edit.php?kodemk=<?php echo $d['kode_mk']; ?>">EDIT</a>
                    <a href="hapus_aksi.php?kodemk=<?php echo $d['kode_mk']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <a href="logout.php">LOGOUT</a>
</body>
</html>