<?php
// controller_delete_buku.php

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $koneksi = mysqli_connect('localhost', 'root', '', 'nama_database');

    // Ambil ID buku dari parameter GET
    $id = $_GET['id'];

    // Hapus buku dari database
    $query = "DELETE FROM books WHERE id = $id";
    mysqli_query($koneksi, $query);

    // Tutup koneksi database
    mysqli_close($koneksi);

    // Redirect ke halaman daftar buku setelah penghapusan
    header('Location: daftar_buku.php');
    exit();
} else {
    // Redirect jika tidak ada parameter ID yang diberikan
    header('Location: daftar_buku.php');
    exit();
}
?>
