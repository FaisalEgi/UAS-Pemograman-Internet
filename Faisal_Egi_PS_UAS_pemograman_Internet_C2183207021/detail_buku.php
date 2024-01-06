<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'nama_database');

// Ambil ID buku dari parameter URL
$id_buku = $_GET['id'];

$query = "SELECT * FROM books WHERE id = $id_buku";
$result = mysqli_query($koneksi, $query);

if ($row = mysqli_fetch_assoc($result)) {
    echo "<p>ID: {$row['id']}</p>";
    echo "<p>Judul: {$row['title']}</p>";
    echo "<p>Penulis: {$row['author']}</p>";
    echo "<p>Tahun Terbit: {$row['published_year']}</p>";
    echo "<p>ISBN: {$row['isbn']}</p>";
} else {
    echo "<p>Buku tidak ditemukan.</p>";
}

mysqli_close($koneksi);
?>
