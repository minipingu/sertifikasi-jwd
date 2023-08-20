<?php
require_once 'config.php';

$id = $_GET['id'];

$query = $pdo->prepare("DELETE FROM daftar WHERE id = ?");
$query->bindParam(1, $id);
$query->execute();

header("location: ../app/index.php");
?>
