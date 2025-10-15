<?php 
include '../config/koneksi.php';
$id = $_GET['id'];
$q = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_anggota='$id'");
$data = mysqli_fetch_assoc($q);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Anggota</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/style.css" rel="stylesheet">
</head>
<body class="p-4">
  <h2>Edit Anggota</h2>
  <form method="post">
    <input class="form-control mb-2" type="text" name="nama" value="<?= $data['nama']; ?>" required>
    <textarea class="form-control mb-2" name="alamat"><?= $data['alamat']; ?></textarea>
    <input class="form-control mb-2" type="text" name="no_hp" value="<?= $data['no_hp']; ?>">
    <button class="btn btn-warning" name="update">Update</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
  </form>
</body>
</html>

<?php
if (isset($_POST['update'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];

  mysqli_query($koneksi, "UPDATE anggota SET 
    nama='$nama', alamat='$alamat', no_hp='$no_hp'
    WHERE id_anggota='$id'");

  echo "<script>alert('Data berhasil diupdate');window.location='index.php';</script>";
}
?>
