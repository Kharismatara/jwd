<?php
include('..\utils\koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $no = $_POST['no'];
  $nama = $_POST['nama'];
  $warna = $_POST['warna'];
  $jumlah = $_POST['jumlah'];



  $query = "UPDATE barang SET no= '$no', nama= '$nama' , warna = '$warna' , jumlah = '$jumlah' WHERE no = '$no'";


  mysqli_query($conn, $query);
  header('location:../list_brg.php');

  mysqli_close($conn);
}