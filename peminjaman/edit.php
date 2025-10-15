<?php 
include '../config/koneksi.php';
$id = $_GET['id'];
$q = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman='$id'");
$data = mysqli_fetch_assoc($q);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Peminjaman</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/style.css" rel="stylesheet">
</head>
<body class="p-4">
  <h2>Edit Peminjaman</h2>
  <form method="post">
    <label>Status</label>
    <select class="form-control mb-2" name="status">
      <option <?= $data['status']=='Dipinjam'?'selected':''; ?>>Dipinjam</option>
      <option <?= $data['status']=='Dikembalikan'?'selected':''; ?>>Dikembalikan</option>
    </select>
    <button class="btn btn-warning" name="update">Update</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
  </form>
</body>
</html>

<?php
if (isset($_POST['update'])) {
  $status = $_POST['status'];

  mysqli_query($koneksi, "UPDATE peminjaman SET status='$status' WHERE id_peminjaman='$id'");

  if ($status == 'Dikembalikan') {
    $get = mysqli_query($koneksi, "SELECT id_buku FROM peminjaman WHERE id_peminjaman='$id'");
    $r = mysqli_fetch_assoc($get);
    mysqli_query($koneksi, "UPDATE buku SET stok = stok + 1 WHERE id_buku='".$r['id_buku']."'");
  }

  echo "<script>alert('Data berhasil diupdate');window.location='index.php';</script>";
}
?>
