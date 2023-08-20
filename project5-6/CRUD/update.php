<?php
ob_start();
require_once 'config.php';

$foto_name = $_FILES['file']['name'];
$foto_tmp = $_FILES['file']['tmp_name'];
$foto_type = $_FILES['file']['type'];
$foto_error = $_FILES['file']['error'];
$foto_size = $_FILES['file']['size'];

$foto_path = "../images/foto";
move_uploaded_file($foto_tmp, $foto_path);

$id = $_POST['id'];
$nama = strip_tags($_POST['nama']);
$alamat = strip_tags($_POST['alamat']);
$kelamin = strip_tags($_POST['kelamin']);
$agama = strip_tags($_POST['agama']);
$sekolah = strip_tags($_POST['sekolah']);

$query = $pdo->prepare("UPDATE daftar SET foto=?,nama=?, alamat=?, kelamin=?, agama=?, sekolah=? WHERE id=?");
$query->bindParam(1, $foto);
$query->bindParam(1, $nama);
$query->bindParam(2, $alamat);
$query->bindParam(3, $kelamin);
$query->bindParam(4, $agama);
$query->bindParam(5, $sekolah);
$query->bindParam(6, $id);
$query->execute();

header("location:../app/index.php");
