<?php 
include('../utils/koneksi.php');


//proses jika data form akan di submit 

if ($_SERVER ["REQUEST_METHOD"])  {
    $no_brg= $_POST["no_brg"];
    $nama_brg= $_POST["nama_brg"];
    $warna_brg= $_POST["warna_brg"];
    $jumlah_brg= $_POST["jumlah_brg"];

    $query= "INSERT INTO barang SET no = '$no_barang', nama='$nama_brg', warna='$warna_brg', jumlah='$jumlah_brg' ";
    mysqli_query($conn, $query);
    header('location:../list_brg.php');
  
}






?>