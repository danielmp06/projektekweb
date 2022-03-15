<?php
 session_start();
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
        <link rel="stylesheet"  type="text/css" href="main/asset/main.css">
    </head>

    <body>
    <h1>
       
        </h1>
    <div class="wallpaper">
        <!---code-->
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top ">    
            <div class="container">
                <a class="navbar-brand" href="#">Lapangan.id</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Home </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="services.php">Service</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="reservation.php">Booking</a>
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
        <!-- video header start -->
        <header>
            <div class="overlay"></div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="main/asset/vidheader.mp4" type="video/mp4">
            </video>
            <div class="vidcontainer h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-3">Welcome to Lapangan.id</h1>
                        <p class="lead mb-0">A Website that helps you to get lapangan</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- video header CLOSE -->

    <br>
    <br>
    <hr/>

        <span class="text-center">
        <h1>What's New</h1>
        <h4>news on our website</h4>
        </span>
        <hr/>
        <!-- SLIDER -->
        <div class="bd-example" >
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="margin-left: 100px;margin-right:100px;margin-top: 50px;margin-bottom: 100px">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="height: 800px">
                    <div class="carousel-item active">
                        <img src="main/asset/img1.png" class="d-block w-100" height="cover" >
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="animated bounceInRight" style="animation-delay: 1s">Sepak Bola</h5>
                            <p class="animated bounceInRight" style="animation-delay: 2s">Info sepak bola</p>
                            <p class="animated bounceInRight" style="animation-delay: 3s"><a href="https://sport.detik.com/sepakbola/">More Info</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="main/asset/img2.jpg" class="d-block w-100" height="auto">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="animated bounceInRight" style="animation-delay: 1s">basketball</h5>
                            <p class="animated bounceInRight" style="animation-delay: 2s">Info basket</p>
                            <p class="animated bounceInRight" style="animation-delay: 3s"><a href="https://www.cbssports.com/nba/">More Info</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="main/asset/img3.png" class="d-block w-100" height="auto">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="animated bounceInRight" style="animation-delay: 1s">bulutangkis</h5>
                            <p class="animated bounceInRight" style="animation-delay: 2s">info bulutangkis</p>
                            <p class="animated bounceInRight" style="animation-delay: 3s"><a href="https://bwfbadminton.com/news/">More Info</a></p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- SLIDER CLOSE --> 
        <!-- who are we open -->
        <section >
            <div class="container pt-10 pb-60">
                <div class="mt-40">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="section-title-02 text-center" >
                            <hr>
                                <h3>
                                    <span> "WHO WE ARE" </span>
                                </h3>
                                <p>
                                We provide a platform for users to book sports venue online via mobile app or web
                                </p>
                            <hr>
                            </div>
                        </div>
                    </div>
                    <div class="common-grid-wrapper">
                        <div class="GridLex-gap-30">
                            <div class="GridLex-grid-noGutter-equalHeight">
                                <div class="GridLex-col-4_sm-4_xs-12_xss-12">
                                    <div class="common-grid-item">
                                        <div class="image">
                                            <img src="main/asset/vision.jpg" height="250px " width="350px">
                                        </div>
                                        <div class="content" style="font-size: 15px;">
                                            <h5>
                                                "Vision"
                                            </h5>
                                            <p>
                                            membantu kemajuan digitalisasi indonesia di era 4.0 menjadi indonesia yang maju
                                                
                                            </p>
                                        </div>
                                    
                                    </div>
                                </div>
                                <div class="GridLex-col-4_sm-4_xs-12_xss-12">
                                    <div class="common-grid-item">
                                        <div class="image">
                                            <img src="main/asset/mission.jpg" height="250px " width="350px">
                                        </div>
                                        <div class="content" style="font-size: 15px;">
                                            <h5>
                                                "Mission"
                                            </h5>
                                            <p>
                                            membantu anda untuk mendapatkan lapangan yang menjadi impian anda .
                                            </p>
                                        </div>
                                    
                                    </div>
                                </div>
                                <div class="GridLex-col-4_sm-4_xs-12_xss-12">
                                    <div class="common-grid-item">
                                        <div class="image">
                                            <img src="main/asset/goal.jpg" height="250px " width="350px">
                                        </div>
                                        <div class="content" style="font-size: 15px;">
                                            <h5>
                                                "Goal"
                                            </h5>
                                            <p>
                                                 memudahkan semua orang supaya bisa mendapatkan lapangan yang mereka inginkan
                                            </p>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>             
        <!-- who are we close -->
        <!-- socialfooter -->
        <hr>
        <br>
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
        <br>
        <hr>
        <!-- socialfooterclose -->
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