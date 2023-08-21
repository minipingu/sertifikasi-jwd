<?php


$pages = [
  "dashboard",
  "beasiswa/beasiswa",
  "beasiswa/form-tambah",
  "beasiswa/form-edit",
  "daftar/mahasiswa",
  "hasil/mahasiswa",
  "hasil/admin",
  "logout",
];



if (isset($_GET['page'])) {
  foreach ($pages as $page) {
    //mengambil parameter link dari menu sidebar untuk menampilkan halaman
    if ($_GET['page'] == $page) {
      include "$page.php";
    }
  }
} else {
  include 'dashboard.php';
}
