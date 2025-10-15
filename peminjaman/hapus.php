<?php
include '../config/koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjaman='$id'");
echo "<script>alert('Data berhasil dihapus');window.location='index.php';</script>";
?>
