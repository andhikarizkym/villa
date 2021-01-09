<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizz Library</title>
    <link rel="icon" type="image/png" href="icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="layout">
            <div class="header">
            <h1>Rizz Library</h1>
            </div>
            <div class="kolom1">
                <form method="post" action="cek_login.php">
                    <table>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td><input type="text" name="user" placeholder="Masukkan Username"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input type="password" name="pass" placeholder="Masukkan Password"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" value="LOGIN"></td>
                        </tr>
                    </table>
                </form>
                <br>
                <!-- cek pesan notifikasi -->
                <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "gagal" ){
                        echo "Login gagal! username dan password salah!";
                    }else if($_GET['pesan'] == "logout"){
                        echo "Anda telah berhasil logout";
                    }else if($_GET['pesan'] == "belum_login"){
                        echo "Anda harus login untuk mengakses halaman user";
                    }    
                }
                ?>
            </div>

            <div class="kolom2">
                <id class="content">
                    <h1>Selamat Datang</h1>
                    <p>Website ini adalah sebuah website perpustakaan berbasis digital</p>
                    <img src="img/perpustakaan.jpg">
                    <h2>Keterangan Login</h2>
                    <p>NIM = NIM Reguler, contoh : 1970231124</p>
                    <p>PIN = Gabungan 2 Karakter depan nama lengkap + 2 Karakter nama lengkap + NIM</p>
                </id>
            </div>

            <div class="footer" style="background-color: salmons; color: black;">© 2020 Copyright :
                <a style="color:black; text-decoration: underline;" href="https://instagram.com/andhikarm_">Andhika Rizky Mahardika</a> 
            </div>
        </div>
    </div>
    
</body>
</html>