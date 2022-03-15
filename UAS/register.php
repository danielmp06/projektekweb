<?php
include_once 'setting/database.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if(empty($name) || empty($pass) || empty($phone) || empty($email)){
    die(pesan(0, "Isi semua kolom untuk melanjutkan registrasi.."));
}
else if(strlen($email) < 7){
    die(pesan(0, "Username harus memiliki 7 karakter"));
}
else if(strlen($pass) < 7){
    die(pesan(0, "Password harus memiliki 7 karakter"));
}
else if ($email == trim($email) && strpos($email, ' ') == true) {
    die(pesan(0, "Username tidak boleh di-spasi"));
}
else if ($pass== trim($pass) && strpos($pass, ' ') == true) {
    die(pesan(0, "Password tidak boleh di-spasi"));
}
else if(ctype_space($pass)){
    die(pesan(0, "Password tidak boleh di-spasi"));
}
else if(!is_numeric($phone)){
    die(pesan(0, "Nomor HP hanya dapat diisi oleh angka"));
}
$pass = md5($_POST['pass']);

$seleksi = mysqli_query($koneksi, "SELECT id_user FROM users WHERE email = '$email' ");
 
$jumlah_baris = mysqli_num_rows($seleksi);

if($jumlah_baris == 0){
    $isi = mysqli_query($koneksi, "INSERT INTO users(name, phone, email, password) VALUES ('$name', '$phone', '$email', '$pass')");
    die(pesan(1, "Pendaftaran Berhasil, Silakan Login.."));
}
else{
     die(pesan(0, "Pendaftaran Gagal, Email sudah terdaftar..")); 
}


function pesan($status, $teks){
    return '{"status" : '.$status.', "teks" : "'.$teks.'"}';
}
?>  