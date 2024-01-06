<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku Baru</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    
        a[href="tampilan_awal.php"] button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

     a[href="daftar_buku.php"] button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
     }
</style>

</head>
<body>
    <form action="controller_tambah_buku.php" method="post">
        <h2>Tambah Buku Baru</h2>

        <label for="title">Title:</label>
        <input type="text" name="title" required>


        <label for="author">Author:</label>
        <input type="text" name="author" required>

        <label for="published_year">Published Year:</label>
        <input type="number" name="published_year" required>

        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" required>

        <input type="submit" value="Tambah Buku">

        <a href="tampilan_awal.php">
            <button type="button">Kembali ke Tampilan Awal</button>
        <a href="daftar_buku.php">
            <button type="button">Lihat Daftar Buku</button>

       
        
        </a>
    </form>
</body>
</html>
