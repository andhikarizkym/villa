<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archana Villa</title>
    <link rel="icon" type="image/png" href="icon.png">
    <link rel="stylesheet" href="css/akun.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Cormorant:wght@500&display=swap" rel="stylesheet">
    
</head>
<body>

    <!-- Proses login dengan memasukkan data yang sudah didaftarkan ke dalam database, dan akan diproses di page cek-login.php -->
    <div class="card">
    <h1>Login Page</h1>
        <form action="cek-login.php" method="post">
            <p>Email : </p> <input type="email" id="email" name="email" placeholder="Your Email"> <br>
            <p>Password : </p> <input type="password" name="pass" placeholder="Your Password"> <br>
            <br>
            <input type="submit" value="LOGIN" onclick='return confirm(Apakah kamu ingin login?)'>
        </form>
        <br> Belum Punya Akun? Daftar Disini <br> <button><a href="signup.php">SIGN UP</a></button>
    </div>
    <!-- Akhir proses Login -->

</body>
</html>