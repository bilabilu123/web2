CREATE DATABASE dbkoperasi;
USE dbkoperasi;

CREATE TABLE pegawai (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nip VARCHAR(10) NOT NULL,
    nama VARCHAR(45) NOT NULL,
    jenis_kelamin CHAR(1) NOT NULL,
    jabatan VARCHAR(45) NOT NULL
);

CREATE TABLE kartu_diskon (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(45) NOT NULL,
    deskripsi TEXT,
    persen_diskon INT NOT NULL
);

CREATE TABLE anggota (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status_aktif BOOLEAN NOT NULL,
    pegawai_id INT NOT NULL,
    kartu_diskon_id INT NOT NULL,
    FOREIGN KEY (pegawai_id) REFERENCES pegawai(id),
    FOREIGN KEY (kartu_diskon_id) REFERENCES kartu_diskon(id)
);

CREATE TABLE jenis_produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(45) NOT NULL,
    deskripsi TEXT
);

CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode VARCHAR(45) NOT NULL,
    nama VARCHAR(45) NOT NULL,
    deskripsi TEXT,
    harga DOUBLE NOT NULL,
    stok INT NOT NULL,
    jenis_produk_id INT NOT NULL,
    FOREIGN KEY (jenis_produk_id) REFERENCES jenis_produk(id)
);

CREATE TABLE pesanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tanggal DATE NOT NULL,
    diskon INT NOT NULL,
    status_bayar BOOLEAN NOT NULL,
    anggota_id INT NOT NULL,
    FOREIGN KEY (anggota_id) REFERENCES anggota(id)
);

CREATE TABLE detail_pesanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pesanan_id INT NOT NULL,
    produk_id INT NOT NULL,
    jumlah INT NOT NULL,
    FOREIGN KEY (pesanan_id) REFERENCES pesanan(id),
    FOREIGN KEY (produk_id) REFERENCES produk(id)
);

CREATE TABLE pembayaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jumlah_bayar DOUBLE NOT NULL,
    tanggal DATE NOT NULL,
    pesanan_id INT NOT NULL,
    FOREIGN KEY (pesanan_id) REFERENCES pesanan(id)
);