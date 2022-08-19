<?php
include('..\utils\koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $no = $_GET['id'];
  $query = "DELETE FROM barang  WHERE no = '$no'";
  mysqli_query($conn, $query);
  header('location:../list_brg.php');
}


