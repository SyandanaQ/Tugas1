<?php
include "koneksi.php";

if (isset($_POST['kirim'])) {
    $nama_lengkap   = $_POST['nama_lengkap'];
    $alamat         = $_POST['alamat'];
    $tempat_lahir   = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $jk             = $_POST['jk'];
    $no_telepon     = $_POST['no_telepon'];
    $email          = $_POST['email'];
    $jp             = $_POST['jp'];
    $total_donasi   = $_POST['total_donasi'];
    $tanggal_donasi = $_POST['tanggal_donasi'];

    $simpan = "INSERT INTO beasiswa(
        nama_lengkap,alamat,tempat_lahir,tanggal_lahir,jk,no_telepon,email,jp,total_donasi,tanggal_donasi) VALUES('$nama_lengkap','$alamat','$tempat_lahir','$tanggal_lahir','$jk','$no_telepon','$email','$jp','$total_donasi','$tanggal_donasi')";

    $result = mysqli_query($conn,$simpan);

    if ($result) {
        echo "<script>alert('Data Berhasil Disimpan');window.location='index.php'</script>";
    }
}
?>