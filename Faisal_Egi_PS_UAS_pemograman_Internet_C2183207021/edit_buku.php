<?php
// edit_buku.php

// Gantilah parameter koneksi sesuai dengan konfigurasi database Anda
$koneksi = mysqli_connect('localhost', 'root', '', 'nama_database');

// Periksa apakah ID buku yang akan diedit telah disertakan dalam URL
if (isset($_GET['id'])) {
    $bookId = $_GET['id'];

    // Query untuk mendapatkan informasi buku berdasarkan ID
    $query = "SELECT * FROM books WHERE id = $bookId";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $book = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . mysqli_error($koneksi);
        exit;
    }
} else {
    echo "ID buku tidak ditemukan!";
    exit;
}

// Proses jika formulir edit telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validasi input (Anda dapat menambahkan validasi lebih lanjut)

    // Ambil data dari formulir
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $isbn = $_POST['isbn'];

    // Query untuk melakukan update informasi buku dalam database
    $updateQuery = "UPDATE books SET title='$title', author='$author', published_year='$published_year', isbn='$isbn' WHERE id = $bookId";
    $updateResult = mysqli_query($koneksi, $updateQuery);

    if ($updateResult) {
        // Redirect ke halaman daftar buku setelah berhasil mengedit
        header('Location: daftar_buku.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>

    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
            font-size: 1.5em;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 1em;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>Edit Buku</h2>

        <label for="title">Title:</label>
        <input type="text" name="title" value="<?php echo $book['title']; ?>" required>

        <label for="author">Author:</label>
        <input type="text" name="author" value="<?php echo $book['author']; ?>" required>

        <label for="published_year">Published Year:</label>
        <input type="number" name="published_year" value="<?php echo $book['published_year']; ?>" required>

        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" value="<?php echo $book['isbn']; ?>" required>

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
