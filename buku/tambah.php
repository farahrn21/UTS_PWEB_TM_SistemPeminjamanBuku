<?php include '../config/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Buku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/style.css" rel="stylesheet">
</head>
<body class="p-4">
  <h2>Tambah Buku</h2>
  <form method="post">
    <input class="form-control mb-2" type="text" name="judul" placeholder="Judul Buku" required>
    <input class="form-control mb-2" type="text" name="penulis" placeholder="Penulis">
    <input class="form-control mb-2" type="number" name="tahun" placeholder="Tahun Terbit">
    <input class="form-control mb-2" type="number" name="stok" placeholder="Stok">
    <button class="btn btn-success" name="simpan">Simpan</button>
  </form>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
  $judul = $_POST['judul'];
  $penulis = $_POST['penulis'];
  $tahun = $_POST['tahun'];
  $stok = $_POST['stok'];

  mysqli_query($koneksi, "INSERT INTO buku (judul, penulis, tahun, stok)
  VALUES ('$judul','$penulis','$tahun','$stok')");
  
  echo "<script>alert('Data berhasil disimpan');window.location='index.php';</script>";
}
?>
