<?php include '../config/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Anggota</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/style.css" rel="stylesheet">
</head>
<body class="p-4">
  <h2>Tambah Anggota</h2>
  <form method="post">
    <input class="form-control mb-2" type="text" name="nama" placeholder="Nama Lengkap" required>
    <textarea class="form-control mb-2" name="alamat" placeholder="Alamat"></textarea>
    <input class="form-control mb-2" type="text" name="no_hp" placeholder="Nomor HP">
    <button class="btn btn-success" name="simpan">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
  </form>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];

  mysqli_query($koneksi, "INSERT INTO anggota (nama, alamat, no_hp)
  VALUES ('$nama','$alamat','$no_hp')");
  
  echo "<script>alert('Data berhasil disimpan');window.location='index.php';</script>";
}
?>
