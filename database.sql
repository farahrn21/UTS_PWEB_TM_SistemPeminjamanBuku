-- Tabel Anggota
CREATE TABLE anggota (
  id_anggota INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  alamat VARCHAR(200),
  no_hp VARCHAR(20)
);

-- Tabel Buku
CREATE TABLE buku (
  id_buku INT AUTO_INCREMENT PRIMARY KEY,
  judul VARCHAR(100),
  penulis VARCHAR(100),
  tahun YEAR
);

-- Tabel Peminjaman
CREATE TABLE peminjaman (
  id_peminjaman INT AUTO_INCREMENT PRIMARY KEY,
  id_anggota INT,
  id_buku INT,
  tanggal_pinjam DATE,
  tanggal_kembali DATE,
  FOREIGN KEY (id_anggota) REFERENCES anggota(id_anggota),
  FOREIGN KEY (id_buku) REFERENCES buku(id_buku)
);

ALTER TABLE buku ADD COLUMN penerbit VARCHAR(100) AFTER penulis;
