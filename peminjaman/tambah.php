<?php include '../config/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Peminjaman</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/style.css" rel="stylesheet">
</head>
<body class="p-4">
  <h2>Tambah Peminjaman</h2>
  <form method="post">
    <label>Nama Anggota</label>
    <select class="form-control mb-2" name="id_anggota" required>
      <option value="">-- Pilih Anggota --</option>
      <?php
      $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
      while($a = mysqli_fetch_assoc($anggota)) {
        echo "<option value='$a[id_anggota]'>$a[nama]</option>";
      }
      ?>
    </select>

    <label>Buku</label>
    <select class="form-control mb-2" name="id_buku" required>
      <option value="">-- Pilih Buku --</option>
      <?php
      $buku = mysqli_query($koneksi, "SELECT * FROM buku WHERE stok > 0");
      while($b = mysqli_fetch_assoc($buku)) {
        echo "<option value='$b[id_buku]'>$b[judul]</option>";
      }
      ?>
    </select>

    <label>Tanggal Pinjam</label>
    <input class="form-control mb-2" type="date" name="tanggal_pinjam" required>

    <label>Tanggal Kembali</label>
    <input class="form-control mb-2" type="date" name="tanggal_kembali" required>

    <button class="btn btn-success" name="simpan">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
  </form>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
  $id_anggota = $_POST['id_anggota'];
  $id_buku = $_POST['id_buku'];
  $tgl_pinjam = $_POST['tanggal_pinjam'];
  $tgl_kembali = $_POST['tanggal_kembali'];

  mysqli_query($koneksi, "INSERT INTO peminjaman (id_anggota, id_buku, tanggal_pinjam, tanggal_kembali, status)
  VALUES ('$id_anggota','$id_buku','$tgl_pinjam','$tgl_kembali','Dipinjam')");

  mysqli_query($koneksi, "UPDATE buku SET stok = stok - 1 WHERE id_buku='$id_buku'");

  echo "<script>alert('Peminjaman berhasil ditambahkan');window.location='index.php';</script>";
}
?>
