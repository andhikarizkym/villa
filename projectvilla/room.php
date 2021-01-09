<?php

include('koneksi.php');

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/room.css" type="text/css">

    <title>Archana Villa</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="home.php">Archana Villa</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto mr-2">
                <a class="nav-link active mr-2" href="home.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link mr-2" href="room.php">Rooms</a>
                <a class="nav-link mr-2" href="about.php">About Us</a>
                <a class="nav-link mr-2" href="login.php">Login</a>
            </div>
        </div>
        </div>
    </nav>
    <!-- Navbar -->


    <div class="container">

    <!-- Penjelasan Lengkap Room -->

        <div class="layout0">
            <h2>Archana Room</h2><hr>
            <br>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/img1.jpg" alt="First slide" height="700px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/img2.jpg" alt="Second slide" height="700px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/img3.jpg" alt="Third slide" height="700px">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
                <br>
                
            <h4 style="text-align: center;">Facilities : </h4>
                <table style="width: 100%;">
                    <tr>
                        <td>
                            <p>
                                Private Pool
                            </p>
                        </td>
                        <td>
                            <p>
                                Rain Shower
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Free Wi-Fi
                            </p>
                        </td>
                        <td>
                            <p>
                                Youtube Access on TV
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                In Room Bathtub
                            </p>
                        </td>
                        <td>
                            <p>
                                Netflix Channel
                            </p>
                        </td>
                    </tr>
                </table>
                <button><a href="booking.php">Booking Now</a></button>
                <!-- Proses booking yang mengarah kepada page booking.php -->
        </div>
    </div>
    <!-- Akhir penjelasan Lengkap Room -->
    
    
    <!-- Footer -->
    <footer footer class="page-footer pt-4">

        <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright : Kelompok Tak Jelas
    </div>
    <!-- Copyright -->

    </footer>
    <!-- Footer -->    
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>