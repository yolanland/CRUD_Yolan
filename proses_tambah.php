<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];
$jurusan_id = $_POST['jurusan'];

$sql = "INSERT INTO mahasiswa (nama, nim, email, nomor, jurusan_id) VALUES ('$nama', '$nim', '$email', '$nomor', '$jurusan_id')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();