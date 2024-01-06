<?php
// controller_tambah_buku.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validasi input (Anda dapat menambahkan validasi lebih lanjut)

    // Ambil data dari formulir
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $isbn = $_POST['isbn'];

    // Panggil model untuk menyimpan buku
    include_once 'model.php';
    tambahBuku($id, $title, $author, $published_year, $isbn);

    // Redirect ke halaman daftar buku
    header('Location: daftar_buku.php');
    exit();
} else {
    // Tampilkan pesan error jika akses langsung ke file ini
    echo "Akses ditolak!";
}
?>
