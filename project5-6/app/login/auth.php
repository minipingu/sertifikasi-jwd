<?php
ob_start();
session_start();

require_once '../../CRUD/config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$select = $pdo->query($query);


$rowCount = $select->rowCount();

if ($rowCount > 0) {
  header('location:../index.php');
  $row = $select->fetch(PDO::FETCH_ASSOC);
  $_SESSION['user'] = $row['username'];
} elseif ($username == "" || $password == "") {
  header('location:../../index.php?error=2');
} else {
  header('location:../../index.php?error=1');
}
