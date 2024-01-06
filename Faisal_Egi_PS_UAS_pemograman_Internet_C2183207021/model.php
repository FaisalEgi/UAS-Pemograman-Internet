<?php
// model.php
function tambahBuku($id, $title, $author, $published_year, $isbn) {
    // Gantilah parameter koneksi sesuai dengan konfigurasi database Anda
    $koneksi = mysqli_connect('localhost', 'root', '', 'nama_database');

    // Escape string untuk mencegah SQL Injection
    
    $author = mysqli_real_escape_string($koneksi, $author);
    $isbn = mysqli_real_escape_string($koneksi, $isbn);

    // Query untuk menyimpan buku ke database
    $query = "INSERT INTO books (id, title, author, published_year, isbn) 
              VALUES ('$id', '$title', '$author', '$published_year', '$isbn')";

    // Eksekusi query
    mysqli_query($koneksi, $query);

    // Tutup koneksi database
    mysqli_close($koneksi);
}
?>
