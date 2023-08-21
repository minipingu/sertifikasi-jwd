<?php
require_once 'config.php';

$id = $_GET['id'];

$query = $pdo->prepare("DELETE FROM beasiswa WHERE id = ?");
$query->bindParam(1, $id);
$query->execute();

header("location: ../app/?page=beasiswa/beasiswa");
?>
