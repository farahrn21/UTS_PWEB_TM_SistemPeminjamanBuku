<?php 
include '../config/koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Buku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/style.css" rel="stylesheet">

</head>
<body class="p-4">
  <h2>Data Buku</h2>
  <a href="tambah.php" class="btn btn-primary mb-3">Tambah Buku</a>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID</th><th>Judul</th><th>Penulis</th><th>Tahun</th><th>Stok</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?= $row['id_buku']; ?></td>
        <td><?= $row['judul']; ?></td>
        <td><?= $row['penulis']; ?></td>
        <td><?= $row['tahun']; ?></td>
        <td><?= $row['stok']; ?></td>
        <td>
          <a href="hapus.php?id=<?= $row['id_buku']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</body>
</html>
