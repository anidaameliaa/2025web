<?php
include "koneksi.php";

$query = "SELECT * FROM mahasiswa";
$data = ambildata($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU</title>
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    <br>
    <a href = "tambahmahasiswa.php">tambah</a>
    <table border="1" cellspacing="0" cellpadding"S">
        <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>No Telp</th>
            <th>Email</th>
            <th>Id</th>
    </thead>
    <tbody>

    <?php
    $i = 1;
    foreach ($data as $d) : ?>

    <tr>
    <td><?php echo $i++; ?></td>
    <td><?= $d["nim"] ?></td>
    <td><?= $d["nama"] ?></td>
    <td><?= $d["tgl_lahir"] ?></td>
    <td><?= $d["no_telp"] ?></td>
    <td><?= $d["email"] ?></td>
    <td><?= $d["id"] ?></td>
    </tr>

    <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>