<?php
session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perpustakaan</title>
</head>

<body>
    <h2>Selamat Datang : <?= $_SESSION["nama_member"] ?></h2>
    <ul>
        <li>
            <a href="Member.php">Data Member</a>
        </li>
        <li>
            <a href="Buku.php">Data Buku</a>
        </li>
        <li>
            <a href="Peminjaman.php">Data Peminjaman</a>
        </li>
    </ul>
    <a href="Logout.php">Logout</a>
</body>

</html>