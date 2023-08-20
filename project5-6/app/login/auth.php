<?php
ob_start();
session_start();
require_once '../../CRUD/config.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

//mengambil data admin
$query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
$select = $pdo->query($query);
$rowAdmin = $select->fetch(PDO::FETCH_ASSOC);
//apakah ada data login adminnya
$rowCountAdmin = $select->rowCount();

//mengambil data mahasiswa
$query = "SELECT * FROM mahasiswa WHERE email='$email' AND password='$password'";
$select = $pdo->query($query);
$rowMahasiswa = $select->fetch(PDO::FETCH_ASSOC);
//apakah ada data login mahasiswanya
$rowCountMahasiswa = $select->rowCount();

if ($rowCountAdmin > 0){
  header('location:../index.php');
  $_SESSION['nama'] = $rowAdmin['nama'];
  $_SESSION['foto'] = $rowAdmin['foto'];
  $_SESSION['role'] = $rowAdmin['role'];


} else if ($rowCountMahasiswa > 0) {
  header('location:../index.php');
  $_SESSION['nama'] = $rowMahasiswa['nama'];
  $_SESSION['foto'] = $rowMahasiswa['foto'];
  $_SESSION['role'] = $rowMahasiswa['role'];
  $_SESSION['nim'] = $rowMahasiswa['NIM'];
  $_SESSION['semester'] = $rowMahasiswa['semester'];
  $_SESSION['ipk'] = $rowMahasiswa['ipk'];
  $_SESSION['jurusan'] = $rowMahasiswa['jurusan'];
  $_SESSION['email'] = $rowMahasiswa['email'];

} elseif ($email == "" || $password == "") {
  header('location:../../index.php?error=2');
  
} else {
  header('location:../../index.php?error=1');
}
