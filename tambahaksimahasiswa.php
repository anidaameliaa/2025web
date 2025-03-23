<?php
include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tgl_lahir = $_POST["tgl_lahir"];
$no_telp = $_POST["no_telp"];
$email = $_POST["email"];
$id = $_POST["id"];

$query = "INSERT INTO mahasiswa (nim, nama, tgl_lahir, no_telp, email, id) VALUES ('$nim', '$nama', 
'$tgl_lahir', '$no_telp', '$email', '$id')";

mysqli_query($conn, $query);

header("location:index.php");
?>