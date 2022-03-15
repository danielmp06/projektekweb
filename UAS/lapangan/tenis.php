<?php
    session_start();
    //validasi login, jika belum balik ke login page
    include_once "../setting/database.php";

    if(!isset($_SESSION['sekarang'])){
        header('location: login.php');
    }
    // global $buttonID;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tenis</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="teniss.css">
        <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../setting/bookingan.js"></script>
    </head>

    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top ">    
            <div class="container">
                <a class="navbar-brand" href="../main.php">Lapangan.id</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="../main.php">Home </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../services.php">Service</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../reservation.php">Booking</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <h3> Hello, <?= $_SESSION['sekarang']['name']?> &nbsp</h3>
                        </li>
                        <li>
                            <a href = "../main/asset/logout.php"><button type = "button" class= "btn btn-light">Logout</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>  
        <!-- navbar CLOSE -->

        <section id="facilities">
            <div class="container">
                <div class="title">
                <br>
                <br>
                <br>
                <br>
                    <h1 style="color:rgb(180, 212, 37);">Tenis</h1>
                    <p>"Untuk menikmati cahaya kesehatan yang baik, Anda harus berolahraga." -Gene Tunney</p>
                </div>
            </div>
        
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3">
                    <?php
                        $query = "SELECT * FROM lapangan WHERE kategori = 'tenis' ";
                        $result = mysqli_query($koneksi, $query);
                        while($row = mysqli_fetch_array($result)){
                            echo "<div class='col mb-4'>";
                                $id_lapangan = $row['id_lapangan'];
                                $harga_sewa = $row['harga_sewa'];
                                $nama_lapangan = $row['nama_lapangan'];
                                $contact_person = $row['contact_person'];
                                $alamat_lapangan = $row['alamat_lapangan'];
                                echo "<div class='card'>";
                                    echo "<div class='card-body'>";
                                        echo "<div class='image-wrapper'>";
                                            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" />';
                                        echo "</div>";
                                        echo "<hr>";
                                        echo "<h5>".$nama_lapangan."</h5>";
                                        echo "<h6>".$alamat_lapangan."</h6>";
                                        echo "<hr align='left'>";
                                        echo "<h6>WA: ".$contact_person."</h6>";
                                        echo "<h6>Rp: ".$harga_sewa."</h6>";
                                        echo "<input type='submit' data-id='".$id_lapangan."' name='pesan' class='btn btn-danger btn-block pesan' value='Pesan'>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>        

            <!-- Footer -->
            <footer class="page-footer font-small mdb-color lighten-3 pt-4">

                <!-- Footer Elements -->
                <div class="container">

                <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-2 col-md-12 mb-4">

                        <!--Image-->
                            <div class="view overlay z-depth-1-half">
                                <img src="image/adidas.jpg" class="img-fluid"
                                    alt="">
                                <a href="">
                                    <div class="mask rgba-white-light"></div>
                                </a>
                            </div>
                        </div>
                        <!--Grid column-->
                
                        <!--Grid column-->
                        <div class="col-lg-2 col-md-6 mb-4">
                
                        <!--Image-->
                            <div class="view overlay z-depth-1-half">
                                <img src="image/reebok.jpg" class="img-fluid"
                                    alt="">
                                <a href="">
                                    <div class="mask rgba-white-light"></div>
                                </a>
                            </div>
                        </div>
                        <!--Grid column-->
                
                        <!--Grid column-->
                        <div class="col-lg-2 col-md-6 mb-4">
                
                        <!--Image-->
                            <div class="view overlay z-depth-1-half">
                                <img src="image/under.jpg" class="img-fluid"
                                alt="">
                                <a href="">
                                <div class="mask rgba-white-light"></div>
                                </a>
                            </div>
                        </div>
                        <!--Grid column-->
                
                        <!--Grid column-->
                        <div class="col-lg-2 col-md-12 mb-4">
                            <!--Image-->
                            <div class="view overlay z-depth-1-half">
                                <img src="image/puma.jpg" class="img-fluid"
                                alt="">
                                <a href="">
                                <div class="mask rgba-white-light"></div>
                                </a>
                            </div>
                        </div>
                        <!--Grid column-->
                
                        <!--Grid column-->
                        <div class="col-lg-2 col-md-6 mb-4">
                
                        <!--Image-->
                            <div class="view overlay z-depth-1-half">
                                <img src="image/umbro.jpg" class="img-fluid"
                                alt="">
                                <a href="">
                                <div class="mask rgba-white-light"></div>
                                </a>
                            </div>
                        </div>
                        <!--Grid column-->
                
                        <!--Grid column-->
                        <div class="col-lg-2 col-md-6 mb-4">
                
                        <!--Image-->
                            <div class="view overlay z-depth-1-half">
                                <img src="image/nike.jpg" class="img-fluid"
                                alt="">
                                <a href="">
                                <div class="mask rgba-white-light"></div>
                                </a>
                            </div>
                        </div>
                        <!--Grid column-->
                    </div>
                <!--Grid row-->
                </div>
                <!-- Footer Elements -->
                    <!-- Copyright -->
                <div class="footer-copyright text-center py-3">
                        <p class="copy-right">© Copyright 2020 Lapangan.id</p>
                </div>
                    <!-- Copyright -->
            </footer>
                <!-- Footer -->
        </section>

        <!-- Pesan Modal-->
        <div class="modal fade" id="pesanmodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title ">Detail Order</h3>
                    </div>
                    <form id="formorder" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="durasi">Durasi Sewa: </label>
                                <input type="text" id="durasi_order" name="durasi_order" class="form-control" placeholder="Durasi Sewa" onkeyup="autocount()">
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Sewa: </label>
                                <input type="date" id="tanggal_order" name="tanggal_order" class="form-control" placeholder="Tanggal Sewa">
                            </div>
                            <div class="form-group">
                                <!-- <label for="harga">ID: </label> -->
                                <input type="text" id="id_lapangan" name="id_lapangan" class="form-control" hidden>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div id="keterangan"></div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" id="submit_order" name="submit_order" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>                  
        

        <!-- stickyscriptnavbar -->
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
        
        <!-- JQuery Confirm -->
        <script src="../assets/jquery-confirm/jquery-confirm.js"></script>

        <script>
            $(".pesan").click(function(){
                var lapId = $(this).data('id');
                $("#id_lapangan").val(lapId);
                $("#pesanmodal").modal();
            });
        </script>
    </body>
</html>