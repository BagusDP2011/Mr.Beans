
CREATE DATABASE IF NOT EXISTS SewaBuku;
USE SewaBuku;

SET SQL_SAFE_UPDATES = 0;


CREATE TABLE IF NOT EXISTS Penyewa (
    user_ID INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    namaDepan VARCHAR(50) NOT NULL,
    namaBelakang VARCHAR(50) NOT NULL,
    alamat VARCHAR(200) NOT NULL
);

CREATE TABLE IF NOT EXISTS Pinjam (
    Pinjam_ID INT AUTO_INCREMENT PRIMARY KEY,
    user_ID INT NOT NULL,
    ISBN INT NOT NULL,
    judulBuku VARCHAR(50) NOT NULL,
    status VARCHAR(50) NOT NULL,
    tanggalPinjam DATE NOT NULL,
    tanggalAkhir DATE NOT NULL,
    biayaPinjam INT NOT NULL,
    FOREIGN KEY (user_ID) REFERENCES Penyewa(user_ID)
);

CREATE TABLE IF NOT EXISTS Kategori (
    Kategori_ID INT AUTO_INCREMENT PRIMARY KEY,
    agama VARCHAR(50) NOT NULL,
    budaya VARCHAR(50) NOT NULL,
    nonfiksi VARCHAR(50) NOT NULL,
    fiksi VARCHAR(50) NOT NULL,
    referensi VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS Buku (
    ISBN INT PRIMARY KEY,
    kategori_ID INT NOT NULL,
    pengarang VARCHAR(200) NOT NULL,
    penerbit VARCHAR(200) NOT NULL,
    harga INT NOT NULL,
    keterangan VARCHAR(200) NOT NULL,
    FOREIGN KEY (kategori_ID) REFERENCES Kategori(Kategori_ID)
);

----------------------------------------------------------------------
INSERT INTO Penyewa (user_ID, email, password, namaDepan, namaBelakang, alamat) VALUES
(1, 'john@example.com', 'sandi1', 'Budi', 'Santoso', 'Jl. Merdeka No. 10, Jakarta'),
(2, 'lina@example.com', 'sandi2', 'Lina', 'Wati', 'Jl. Jendral Sudirman No. 5, Surabaya'),
(3, 'adi@example.com', 'sandi3', 'Adi', 'Susanto', 'Jl. Diponegoro No. 15, Bandung'),
(4, 'siti@example.com', 'sandi4', 'Siti', 'Rahayu', 'Jl. Gajah Mada No. 20, Yogyakarta'),
(5, 'agus@example.com', 'sandi5', 'Agus', 'Wijaya', 'Jl. Pahlawan No. 30, Semarang');

INSERT INTO Kategori (Kategori_ID, agama, budaya, nonfiksi, fiksi, referensi) VALUES
(1, 'Islam', 'Indonesia', 'Tidak', 'Ya', 'Tidak ada'),
(2, 'Kristen', 'Inggris', 'Ya', 'Tidak', 'Tidak ada'),
(3, 'Islam', 'Inggris', 'Ya', 'Tidak', 'Tidak ada'),
(4, 'Islam', 'Inggris', 'Tidak', 'Ya', 'Tidak ada'),
(5, 'Islam', 'Inggris', 'Ya', 'Tidak', 'Tidak ada');

INSERT INTO Buku (ISBN, kategori_ID, pengarang, penerbit, Harga, keterangan) VALUES
(0141439792, 1, 'Jane Austen', 'Penguin Classics', 75000, 'Novel klasik'),
(0345337664, 2, 'J.R.R. Tolkien', 'Del Rey', 90000, 'Fantasy'),
(1400079988, 3, 'Khaled Hosseini', 'Riverhead Books', 85000, 'Fiksi sejarah'),
(0061120084, 4, 'Harper Lee', 'Harper Perennial', 80000, 'Fiksi klasik'),
(0307277679, 5, 'J.D. Salinger', 'Back Bay Books', 70000, 'Coming-of-age');

INSERT INTO Pinjam (Pinjam_ID, user_ID, ISBN, judulBuku, status, tanggalPinjam, tanggalAkhir, biayaPinjam) VALUES
(1, 1, 0141439792, 'Pride and Prejudice', 'Dipinjam', '2024-05-01', '2024-06-01', 5000),
(2, 2, 0345337664, 'The Hobbit', 'Dipinjam', '2024-05-02', '2024-06-02', 7000),
(3, 2, 1400079988, 'The Kite Runner', 'Dipinjam', '2024-05-03', '2024-06-03', 6000),
(4, 4, 0061120084, 'To Kill a Mockingbird', 'Dipinjam', '2024-05-04', '2024-06-04', 8000),
(5, 5, 0307277679, 'The Catcher in the Rye', 'Dipinjam', '2024-05-05', '2024-06-05', 5500);


----------------------------------------------------------------------
-- Update alamat untuk penyewa dengan namaDepan 'Budi' dan namaBelakang 'Santoso'
UPDATE Penyewa
SET alamat = 'Jl. Gatot Subroto No. 25, Jakarta'
WHERE namaDepan = 'Budi' AND namaBelakang = 'Santoso';

-- Update email dan password untuk penyewa dengan user_ID 2
UPDATE Penyewa
SET email = 'lina_wati@example.com'
WHERE user_ID = 2;

-- Update status kembali untuk peminjaman dengan email 'adi@example.com'
UPDATE Pinjam
SET status = 'Telah Kembali'
WHERE judulBuku = 'The Hobbit';

-- Update agama untuk kategori_ID 4
UPDATE Kategori
SET agama = 'Kristen'
WHERE Kategori_ID = 4;

-- Update pengarang untuk buku dengan ISBN sekian
UPDATE Buku
SET pengarang = 'J.K. Rowling'
WHERE ISBN = 0141439792;


----------------------------------------------------------------------
-- Menghapus penyewa dengan user_ID 3
DELETE FROM Penyewa
WHERE user_ID = 3;

-- Menghapus peminjaman dengan ISBN 0307277679
DELETE FROM Pinjam
WHERE ISBN = 0307277679;

-- Menghapus buku dengan ISBN 0307277679
DELETE FROM Buku
WHERE ISBN = 0307277679;

-- Menghapus peminjaman dengan judulbuku 'The Hobbit'
DELETE FROM Pinjam
WHERE judulBuku = 'The Hobbit';

-- Menghapus buku dengan pengarang 'J.R.R. Tolkien'
DELETE FROM Buku
WHERE pengarang = 'J.R.R. Tolkien';


----------------------------------------------------
-- SELECT QUERIES
USE SewaBuku;
SET SQL_SAFE_UPDATES = 0;

SELECT * FROM Penyewa;
SELECT namaDepan, namaBelakang, alamat FROM Penyewa WHERE user_ID = 1;
SELECT judulBuku, tanggalPinjam, status FROM Pinjam;
SELECT pengarang, keterangan FROM Buku;
SELECT Kategori_ID, agama FROM Kategori;