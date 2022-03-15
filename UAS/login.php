<?php 
session_start();
if (isset($_SESSION["sekarang"])) {	
	header("location: main.php");
}
include_once "setting/database.php";

if(isset($_POST['submit_login'])) {
  $email_login = $_POST['email_login'];
  $pass_login = md5($_POST['pass_login']);
  $checkemail = false;
  $users = $koneksi->query("select * from users")->fetch_all(MYSQLI_ASSOC);
foreach($users as $user){
    if($user['email'] == $email_login && $user['password'] == $pass_login){
        $checkemail = true;
        $_SESSION['sekarang'] = $user;
    }
}
if($checkemail == true){
    header("location: main.php");
}else{
	 	echo "<script>alert('Login Gagal');</script>";  
    }
}
?>

<!doctype html>
<html>
  <head>
    <title>Lapangan.id | Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login/asset/log-in.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="login/asset/daftar.js"></script>
  </head>

  <body>
    <div class="container">
      <h1 class="welcome d-flex justify-content-center" >WELCOME TO LAPANGAN.ID</h1>
        <div class="d-flex justify-content-center h-100">
          <div class="card">  
            <div class="card-header bg">
              <h3 class="d-flex justify-content-center" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;letter-spacing: 1px">Sign in to Lapangan.id</h3>
            </div>
            
            <div class="card-body">
              <form id="formlogin" method="POST">
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" id="email_login" name="email_login" class="form-control" placeholder="Email">
                </div>
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" style="-webkit-text-security: square;" id="pass_login" name="pass_login" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="submit" id="submit_login" name="submit_login" value="Login" class="btn btn-danger flot-right login_btn">
                </div>
                <h5 style="color: aliceblue;">Don't have a account? <a id="signup" href="#myModal">Register NOW!</a></h5>
                <!-- Trigger the modal with a button -->
              </form>
            </div>
              
            <div class="card-footer">
              <div class="d-flex justify-content-center links">
              </div>
            </div>
          </div>
        </div>

        <div class="socialfooter w-100 ">
          <div class="inner-social text-center align-items-center " >
            <h5 style="color: white;font-size: 20px;" >Join Us On</h5>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
            <p class="copy-right" style="color: white;font-size: 15px;" >© Copyright 2020 Lapangan.id</p>
          </div>
      </div>  
    </div>

    <!-- Sign Up Modal-->
    <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h3 class="modal-title " >Create Account!</h3>
          </div>
          <form id="formdaftar" method="POST">
            <div class="modal-body">
              <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="phone">Phone: </label>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="pass">Password: </label>
                <input type="text" id="pass" name="pass" class="form-control" placeholder="Password">
              </div>
            </div>
            <div class="modal-footer">
              <div id="keterangan"></div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="submit_daftar" name="submit_daftar" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Sign UP</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- JQuery Confirm -->
    <script src="assets/jquery-confirm/jquery-confirm.js"></script>

    <script>
      $("#signup").click(function(){
          $("#signup-modal").modal();
      });
    </script>
  </body>
</html>