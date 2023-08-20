<?php


$pages = [
  "beasiswa/mahasiswa",
  "dashboard",
  "form-edit",
  "form-tambah",
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
