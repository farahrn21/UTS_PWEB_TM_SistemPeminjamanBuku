<?php include("config/koneksi.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="../assets/style.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">📚 Peminjaman Buku</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="buku/index.php">Data Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="anggota/index.php">Data Anggota</a></li>
                    <li class="nav-item"><a class="nav-link" href="peminjaman/index.php">Data Peminjaman</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center mt-5">
        <h1 class="fw-bold">Selamat Datang di Sistem Peminjaman Buku</h1>
        <p class="text-muted">Gunakan menu di atas untuk mengelola data buku, anggota, dan peminjaman.</p>
        <img src="https://cdn-icons-png.flaticon.com/512/2995/2995710.png" alt="Books" width="200">
    </div>

    <footer class="text-center mt-5 mb-3 text-muted">
        <small>Sistem Peminjaman Buku | Farah Rini</small>
    </footer>

</body>
</html>
