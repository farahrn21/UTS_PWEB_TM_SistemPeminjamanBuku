<?php
include '../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM anggota WHERE id_anggota='$id'");
echo "<script>alert('Data berhasil dihapus');window.location='index.php';</script>";
?>
