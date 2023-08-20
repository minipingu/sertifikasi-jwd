<?php


$pages = [
  "beranda/admin.php",
  "form-edit",
  "form-tambah",
  "logout",


];


if (isset($_GET['page'])) {
  foreach ($pages as $p) {
    if ($_GET['page'] == $p) {
      include "$p.php";
    }
  }
} else {
  include 'data.php';
}
