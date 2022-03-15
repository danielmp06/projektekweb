<?php
 session_start();
 include_once "setting/database.php";

 //validasi login, jika belum balik ke login page
 if(!isset($_SESSION['sekarang'])){
   header('location: login.php');
 }
 ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lapangan.ID</title>
        <!-- botstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gridlex/2.7.1/gridlex.min.css">
        <!-- botstrap -->
        <link rel="stylesheet"  type="text/css" href="setting/reservation.css">
    </head>

    <body>
        <h1>
        
            </h1>
        <div class="wallpaper h-auto">
            <!---code-->
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top ">    
                <div class="container">
                    <a class="navbar-brand" href="main.php">Lapangan.id</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                            <a class="nav-link" href="main.php">Home </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="services.php">Service</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Booking</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <h3> Hello, <?= $_SESSION['sekarang']['name']?> &nbsp</h3>
                            </li>
                            <li>
                                <a href = "main/asset/logout.php"><button type = "button" class= "btn btn-light">Logout</button></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- navbar CLOSE -->

                <div class="wls">
                    <div class="jumbotron text-center"  >
                    <hr/>
                        <h1 style="color:white;">Booked</h1>
                        <h5 style="color:white;"> Check Reservation</h5>
                    <hr/>
                    </div>  
                </div>
                <br>
                <br>

            <table class="reservasi-table center">
                <thead>
                    <tr>
                        <th>ID Booking</th>
                        <th>Durasi Sewa</th>
                        <th>Tanggal</th>
                        <th>ID Lapangan</th>
                    </tr>
                </thead>
                <tbody>    
                    <?php 
                        $idCek = $_SESSION['sekarang']['id_user'];
                        $query = "SELECT * FROM data_booking WHERE id_user = $idCek ";
                        $result = mysqli_query($koneksi,$query);
                        while($row = mysqli_fetch_array($result)){
                            $id = $row['id_booking'];
                            $sewa = $row['durasi_sewa'];
                            $tanggal = $row['tanggal'];
                            $id_lapangan = $row['id_lapangan'];
                            
                            echo "<tr>";
                            echo "<td>".$id."</td>";
                            echo "<td>".$sewa."</td>";
                            echo "<td>".$tanggal."</td>";
                            echo "<td>".$id_lapangan."</td>";
                            echo "</tr>";
                        }
                    ?> 
                </tbody>    
            </table>

            <!-- socialfooter -->
            <!-- socialfooterclose -->
        </div>

        <div class="socialfooter w-100 ">
            <div class="inner-social text-center align-items-center " >
                <h5 >Join Us On</h5>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
                <p class="copy-right">© Copyright 2020 Lapangan.id</p>
            </div>
        </div>

        <!-- stickyscriptnavbar -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> </script>
            <script>
                $(document).ready(function(){
                    $(window).on('scroll',function(){
                        if($(window).scrollTop()){
                        $("nav").addClass('navbar-sticky');
                        $("nav").addClass('bg-danger');
                        }else{

                        $("nav").removeClass('navbar-sticky');
                        $("nav").removeClass('bg-danger');
                        }
                    });

                });
            </script>
        <!-- scriptnavbar CLOSE -->
        <!-- Jforbotstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>