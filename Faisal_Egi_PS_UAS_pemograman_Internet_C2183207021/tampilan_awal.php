<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Buku</title>

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

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        .button-container {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .action-button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .action-button:hover {
            background-color: #45a049;
        }

        .profile-info {
        background-color: #f4f4f4;
        border-radius: 8px;
        padding: 20px;
        width: 300px;
        margin-top: 20px;
        text-align: left;
        }

        .profile-info p {
        margin: 8px 0;
        font-size: 16px;
        color: #333;
        }

        .profile-info p span {
        font-weight: bold;
        margin-right: 10px;
        }
</style>

    </style>
</head>
<body>
    <div class="container">
        <h2>Manajemen Buku</h2>
        <div class="button-container">
            <a href="tambah_buku_form.php" class="action-button">Tambah Buku</a>
            <a href="daftar_buku.php" class="action-button">Daftar Buku</a>
        </div>
        <div class="profile-info">
            <p>Nama     : Faisal Egi Putra Sumpena</p>
            <p>NIM      : C2183207021</p>
            <p>Kelas    : PTI5A</p>
        </div>
    </div>
</body>
</html>
