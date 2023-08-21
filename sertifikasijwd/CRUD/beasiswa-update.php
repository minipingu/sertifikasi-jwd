<?php
ob_start();
require_once 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$link = $_POST['link'];


$query = $pdo->prepare("UPDATE beasiswa SET nama=?, keterangan=?, link=? WHERE id=?");
$query->bindParam(1, $nama);
$query->bindParam(2, $keterangan);
$query->bindParam(3, $link);
$query->bindParam(4, $id);

$query->execute();

header("location:../app?page=beasiswa/beasiswa");
