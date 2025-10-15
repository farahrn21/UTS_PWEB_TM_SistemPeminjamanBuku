<?php 
include '../config/koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM anggota");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Anggota</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/style.css" rel="stylesheet">
</head>
<body class="p-4">
  <h2>Data Anggota</h2>
  <a href="tambah.php" class="btn btn-primary mb-3">Tambah Anggota</a>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID</th><th>Nama</th><th>Alamat</th><th>No HP</th><th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?= $row['id_anggota']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['no_hp']; ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id_anggota']; ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="hapus.php?id=<?= $row['id_anggota']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</body>
</html>
