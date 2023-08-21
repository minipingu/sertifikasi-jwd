<?php
ob_start();

$dsn = "mysql:host=localhost;dbname=siswa";
$user = "root";
$pass = "";
$pdo = new PDO($dsn, $user, $pass);
