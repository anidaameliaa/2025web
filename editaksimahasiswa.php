<?php
include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tgl_lahir = $_POST["tgl_lahir"];
$no_telp = $_POST["no_telp"];
$email = $_POST["email"];
$id = $_POST["id"];

$query = "UPDATE mahasiswa SET nama = '$nama',
tgl_lahir = '$tgl_lahir', no_telp = '$no_telp',
email = '$email', id = '$id' WHERE nim = '$nim'";

mysqli_query($conn, $query);

header("location:index.php");
?>