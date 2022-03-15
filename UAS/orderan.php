<?php
    session_start();
    include_once 'setting/database.php';

    $durasi_order = $_POST['durasi_order'];
    $tanggal_order = $_POST['tanggal_order'];
    $id_user = $_SESSION['sekarang']['id_user'];
    $id_lapangan = $_POST['id_lapangan'];

    if(empty($tanggal_order) || empty($durasi_order)){
        die(pesan(0, "Isi semua kolom untuk melanjutkan pembayaran.."));
    }

    $booking= mysqli_query($koneksi, "INSERT INTO data_booking(durasi_sewa, tanggal, id_user, id_lapangan) VALUES ('$durasi_order', '$tanggal_order','$id_user','$id_lapangan')");
        die(pesan(1, "Berhasil Booking, Berikut rincian pemesanan.."));

    function pesan($status, $teks){
        return '{"status" : '.$status.', "teks" : "'.$teks.'"}';
    }
?>