<?php
ob_start();
require_once 'config.php';

$foto_name = $_FILES['file']['name'];
$foto_tmp = $_FILES['file']['tmp_name'];
$foto_type = $_FILES['file']['type'];
$foto_error = $_FILES['file']['error'];
$foto_size = $_FILES['file']['size'];
$foto_path = "../images/foto/" . $foto_name;

if ($foto_error > 0) {
  header('location:../app/form-tambah.php?error=1');
} else if ($foto_type != "image/jpeg" && $foto_type != "image/png") {
  header('location:../app/form-tambah.php?error=2');
} else {
  move_uploaded_file($foto_tmp, $foto_path);

  $nama = strip_tags($_POST['nama']);
  $alamat = strip_tags($_POST['alamat']);
  $kelamin = strip_tags($_POST['kelamin']);
  $agama = strip_tags($_POST['agama']);
  $sekolah = strip_tags($_POST['sekolah']);

  //untuk mengamankan dari SQL injection kita coba gunakan perintah seperti ini
  $query = $pdo->prepare("INSERT INTO daftar (foto,nama,alamat,kelamin,agama,sekolah) VALUES (?,?,?,?,?,?)");
  $query->bindParam(1, $foto_name);
  $query->bindParam(2, $nama);
  $query->bindParam(3, $alamat);
  $query->bindParam(4, $kelamin);
  $query->bindParam(5, $agama);
  $query->bindParam(6, $sekolah);
  $query->execute();

  header("location:../app/index.php?error=0");
}
