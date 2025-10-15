<?php 
include '../config/koneksi.php';

$query = "
SELECT peminjaman.*, anggota.nama AS nama_anggota, buku.judul AS judul_buku 
FROM peminjaman
JOIN anggota ON peminjaman.id_anggota = anggota.id_anggota
JOIN buku ON peminjaman.id_buku = buku.id_buku
ORDER BY peminjaman.id_peminjaman DESC
";

$result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Peminjaman</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/style.css" rel="stylesheet">
</head>
<body class="p-4">
  <h2>Data Peminjaman</h2>
  <a href="tambah.php" class="btn btn-primary mb-3">Tambah Peminjaman</a>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nama Anggota</th>
        <th>Judul Buku</th>
        <th>Tgl Pinjam</th>
        <th>Tgl Kembali</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?= $row['id_peminjaman']; ?></td>
        <td><?= $row['nama_anggota']; ?></td>
        <td><?= $row['judul_buku']; ?></td>
        <td><?= $row['tanggal_pinjam']; ?></td>
        <td><?= $row['tanggal_kembali']; ?></td>
        <td><?= $row['status']; ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id_peminjaman']; ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="hapus.php?id=<?= $row['id_peminjaman']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</body>
</html>
